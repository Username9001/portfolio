#include <SPI.h>
byte address = 0x11;
int CS = 10;
int i = 0;

void setup()
{
	pinMode(2, INPUT_PULLUP);
	pinMode(4, INPUT_PULLUP);
	pinMode(6, INPUT_PULLUP);
	pinMode(8, INPUT_PULLUP);

	pinMode (CS, OUTPUT);
	SPI.begin();
	// adjust high and low resistance of potentiometer
	// adjust highest resistance
	digitalPotWrite(0x00);
	delay(1000);

	// adjust wiper in the mid point
	digitalPotWrite(0x80);
	delay(1000);

	// adjust lower resistance
	digitalPotWrite(0xFF);
	delay(1000);
}

void loop()
{
	int sensorVal2 = digitalReady(2);
	int sensorVal4 = digitalReady(4);
	int sensorVal6 = digitalReady(6);
	int sensorVal8 = digitalReady(8);

	if (sensorVal2 == LOW){
		for (i=10;i<=80;i+1)
		{
			digitalPotWrite(i);
			delay(200);
			break;
		}
	} else if (sensorVal4 == LOW)
	{
		for (i=81;i<=160;i+1)
		{
			digitalPotWrite(i);
			delay(200);
			break;
		}
	} else if (sensorVal4 == LOW)
	{
		for (i=161;i<=250;i+1)
		{
			digitalPotWrite(i);
			delay(200);
			break;
		}
	} else if (sensorVal8 == LOW) {
		digitalPotWrite(0);
		delay(50);
	}
}

int digitalPotWrite(int value)
{
	digitalWrite(CS, LOW);
	SPI.transfer(address);
	SPI.transfer(value);
	digitalWrite(CS, HIGH);
}







