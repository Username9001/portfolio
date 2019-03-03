@extends('layouts.app')

@section('content')


        {{-- do not show on load | OLIO --}}
        <div id="olio-description" class="project-single">
            <div class="project-hero-image">
                <div class="project-header">
                    <h1>Olio</h1>
                </div>
                <a href="#olio-text" class="scroll-down" aria-label="scroll"></a>
            </div>
            <div class="project-text" id="olio-text">
                <ul class="team">
                    <li>E. Disbergen&nbsp;|&nbsp;</li>
                    <li>L.S. Stavenuiter&nbsp;|&nbsp;</li>
                    <li>E.Y. Wubbels</li>
                </ul>
                <div class="project-description">
                    <div class="responsibilities">
                        <h3>Responsibilities</h3>
                        <ul class="resp-list">
                            <li>Programming Arduino</li>
                            <li>Managing electronics</li>
                            <li>Creating custom circuit boards</li>
                        </ul>
                    </div>
                    <blockquote data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                        "Can an interactive tagging tool change behaviour and create a feeling of shared responsibility concerning clutter in communal kitchens in student houses?"
                        <hr>
                        <span class="bc-span">research question</span>
                    </blockquote>
                    <p>
                        This research studies
                        behavioural change within the everyday practices of a shared
                        kitchen using an interactive tool. The research question reads:
                        <i>"Can an interactive tagging tool change ones behaviour and create a feeling of shared responsibility 
                        concerning clutter in communal kitchens in student houses?"</i>
                    </p>

                    <p>
                        In answering this question we looked into everyday practice in communal spaces. 
                        Assuming there would be diverse and opinionated people in student houses, 
                        it was chosen as the research environment.
                    </p>
                    <img src="/storage/olio-detail.jpg" alt="" class='detail-image' />
                    <span>Olio with all six tokens</span>
                    <p>
                        Olio is a social persuasive system, meant to trigger communication
                        and behavioural change in cleaning up of individuals
                        in the context of student households. The tool consists out
                        of six individual tokens. Designed to be used as a tagging system for mess in
                        communal spaces. 
                    </p>
                    <blockquote data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                        "I never really bother to say anything about the mess because it is too much effort. This token is ideal because it's such little effort to use."
                        <hr>
                        <span class="bc-span">User during interview</span>
                    </blockquote>
                    <p>
                        A token is placed by one of the participants when they consider something messy. 
                        It then is expected that the tagged participant will adjust their behaviour within the communal space.
                        The system is easy to use and relatively unobtrusive on it's own. 
                        This however changes when the particpants start to use it.
                    </p>
                    <img src="/storage/olio-detail-2.jpg" alt="" class='detail-image'/>
                    <span>Research environment</span>
                        <p>
                            Olio was tested in two different student households with a
                            total of twelve participants for four weeks. It was measured by
                            observations from the participants and communicated through 
                            individual and group interviews.
                        </p>
                        <blockquote data-aos="fade-left" data-aos-duration="1400" data-aos-easing="ease-in-out" data-aos-anchor-placement="center-bottom">
                            "I use Olio everywhere"
                            <hr>
                            <span class="bc-span">Participant</span>
                            <img src="/storage/olio-detail-4.jpg" alt="" class='detail-image' />
                            <span>Token in the kitchen</span>
                        </blockquote>
                        <p>
                            The results show an increase in awareness of the mess being
                            made and showed Olio as a trigger of discussions within the group about clutter.
                        </p>
                        <img src="/storage/olio-detail-5.jpg" alt="" class='detail-image'/>
                        <span>Token on the stove</span>
                        <a href="/storage/reports/olio-report.pdf" download>
                            <button>
                                Report
                                <img class="download" src="/storage/download-solid.svg" alt="download link">
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>   

@endsection