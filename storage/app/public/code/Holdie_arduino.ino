//INPUT LDR
int ldrPin = 0;
int ldrVal = 0;

//OUTPUT PWM Pins
int redPin = 9;
int grnPin = 10;
int bluPin = 11;

//Variables
double redVal = 255;
double grnVal = 98;
double bluVal = 0;
int steps = 70;
int increase = false;

//Changes
double redChange = ((double)255 / steps);
double grnChange = ((double)98 / steps);
int DEBUG = 1;
int vibrationMotor = 3;

#include <CapacitiveSensor.h>

CapacitiveSensor cs_4_2 = CapacitiveSensor(4,2); // 10M resistor between pins 4 & 2, pin 2 is sensor pin, add a wire and or foil if desired

void setup()
{
pinMode(redPin, OUTPUT);
pinMode(grnPin, OUTPUT);
pinMode(bluPin, OUTPUT);
pinMode(vibrationMotor, OUTPUT);
cs_4_2.set_CS_AutocaL_Millis(0xFFFFFFFF); // turn off autocalibrate on channel 1 
Serial.begin(9600);
}

void loop()
{
ldrVal = analogRead(ldrPin);
long start = millis();
long total1 = cs_4_2.capacitiveSensor(30);
if(total1 < 100){
digitalWrite(vibrationMotor, HIGH);
delay(150);
digitalWrite(vibrationMotor, LOW);
delay(1000);
analogWrite(redPin, 0);
analogWrite(grnPin, 0);
analogWrite(bluPin, 0);}
else if(ldrVal > 5){
if ((redVal <= 0 || redVal >= 255) || (grnVal <= 0)) {
redChange = -redChange;
grnChange = -grnChange;
}
redVal += redChange;
grnVal += grnChange;
analogWrite(redPin, redVal);
analogWrite(grnPin, grnVal);
analogWrite(bluPin, bluVal);
}
else {
analogWrite(redPin, 0);
analogWrite(grnPin, 0);
analogWrite(bluPin, 0);
digitalWrite(vibrationMotor, LOW);}
Serial.print(total1); // check on performance in milliseconds
Serial.print(“\t”); // tab character for debug windown spacing
Serial.println(ldrVal); // print sensor output 1
}
