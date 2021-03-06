
<div class="text-center" ng-controller="tmiController">
    <div id="tmiHeadline">
        <h1 class="pageTitle">Ready to learn more about me?</h1>
        <p class="pageSubTitle hidden767">Click on an icon below to get started.</p>
    </div>

    <div class="row text-center" id="tmiNavList">
        <div ng-class="{currentImage: showing == 'resume' }" class="hidden767 tmiImageLinks col-sm-4 col-md-4 col-lg-4"><a ng-click="show('resume')"><img src="/assets/tmiIcons/resumeSmall.png"><br/>My Resume</a></div>

        <div ng-class="{currentImage: showing == '10Things' }" class="hidden767 tmiImageLinks col-sm-4 col-md-4 col-lg-4"><a ng-click="show('10Things')"><img src="/assets/tmiIcons/10ThingsSmall.png"><br/>10 Random Things</a></div>

        <div ng-class="{currentImage: showing == 'skills' }" class="hidden767 tmiImageLinks col-sm-4 col-md-4 col-lg-4"><a ng-click="show('skills')"><img src="/assets/tmiIcons/skillsSmall.png"><br/>My Skills</a></div>
    </div>


    <div class="tmiCard col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3" id="tmiWelcome" ng-hide="showing">
        <div>
            <h3>Come on in!</h3>
        </div>
        <div>
            <img src="/assets/tmiIcons/tmiMain.png">
        </div>
        <div>
            <p>
                This is my TMI page. You can use it to learn more about me.
                Get started by checking out <span class="tmiInnerContentLinks" ng-click="show('resume')">My Resume</span>, or learning <span class="tmiInnerContentLinks" ng-click="show('10Things')">10 Random Things</span> I don't mind sharing about myself.
            </p>
        </div>
    </div>
    <div class="tmiCard col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3" id="tmiResume" ng-show="showing == 'resume'">
        <div>
            <h3>Check out My Resume</h3>
        </div>
        <div>
            <img class="center-block" src="/assets/tmiIcons/resumeLarge.png">
        </div>
        <div>
            <p>The link below will take you to it.</p>
            <a href="/resume" target="_blank">My Resume</a>
        </div>
    </div>

    <div id="tmi10Things" class="text-center row" ng-show="showing == '10Things'">
        <div ng-show="currentTMI == '0'" class="tmiCard col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
            <div>
                <h3>10 Random Things</h3>
            </div>
            <div>
                <img class="center-block" src="/assets/tmiIcons/10ThingsLarge.png">
            </div>
            <div>
                <p> The following is a list of 10 very random things about me. Enjoy!</p>
            </div>
            <div>
                <button class="btn btn-success" ng-click="setTMIto1()">Launch</button>
            </div>
        </div>
        <div ng-show="currentTMI == '1'" class="tmi10ThingsCard col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
            <div>
                <h3>#1 I'm a follower of Jesus Christ</h3>
            </div>

            <div>
                <img class="center-block" src="/assets/tmiIcons/10ThingsIcon1.png">
            </div>

            <div>
                <p>
                    I put this first because my relationship with God has a enormous influence on my character.
                    This makes me value qualities such as honesty, integrity, and selflessness and those that possess them.
                </p>
            </div>

            <div>
                <div class="col-lg-offset-6 col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollRight">
                    <a ng-click="nextTMI()">Next<span class="glyphicon glyphicon-chevron-right" ></span></a>
                </div>
            </div>

        </div>
        <div ng-show="currentTMI == '2'" class="tmi10ThingsCard col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
            <div>
                <h3>#2 I'm Married and a Father of 2</h3>
            </div>

            <div>
                <img class="center-block" src="/assets/tmiIcons/10ThingsIcon2.png">
            </div>

            <div>
                <p>
                    I am the proud father of two kids who are doing very well in school.
                    I am also happily married to my beautiful wife who only ever nags on weekdays.
                    I love them all very much.
                </p>
            </div>

            <div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollLeft">
                    <a ng-click="prevTMI()"><span class="glyphicon glyphicon-chevron-left" ></span>Prev</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollRight">
                    <a ng-click="nextTMI()">Next<span class="glyphicon glyphicon-chevron-right" ></span></a>
                </div>
            </div>
        </div>
        <div ng-show="currentTMI == '3'" class="tmi10ThingsCard col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
            <div>
                <h3>#3 I am partially Ambidextrous?</h3>
            </div>

            <div>
                <img class="center-block" src="/assets/tmiIcons/10ThingsIcon3.png">
            </div>

            <div>
                <p>
                    I write, drive, and eat with my left hand.
                    However I use my right to brush my teeth, and throw a football.
                    Pretty much everything else is up for grabs.
                </p>
            </div>

            <div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollLeft">
                    <a ng-click="prevTMI()"><span class="glyphicon glyphicon-chevron-left" ></span>Prev</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollRight">
                    <a ng-click="nextTMI()">Next<span class="glyphicon glyphicon-chevron-right" ></span></a>
                </div>
            </div>
        </div>
        <div ng-show="currentTMI == '4'" class="tmi10ThingsCard col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
            <div>
                <h3>#4 Brain >= Brawn</h3>
            </div>

            <div>
                <img class="center-block" src="/assets/tmiIcons/10ThingsIcon4.png">
            </div>

            <div>
                <p>
                    I think its important to stay in shape physically.
                    Im always working to improve my 5RM's which are currently a 315lb Bench press, 390lb DeadLift, 375lb HackSquat, 105lb PullUp, and also a 5.2 sec 120ft Sprint.
                </p>
            </div>

            <div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollLeft">
                    <a ng-click="prevTMI()"><span class="glyphicon glyphicon-chevron-left" ></span>Prev</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollRight">
                    <a ng-click="nextTMI()">Next<span class="glyphicon glyphicon-chevron-right" ></span></a>
                </div>
            </div>
        </div>
        <div ng-show="currentTMI == '5'" class="tmi10ThingsCard col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
            <div>
                <h3>#5 I'm a recovered SneakerHead</h3>
            </div>

            <div>
                <img class="center-block" src="/assets/tmiIcons/10ThingsIcon5.png">
            </div>

            <div>
                <p>
                    Me 5 yrs ago: "Hello, I'm Kevin and can't seem to stop buying Jordans."
                </p>
            </div>

            <div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollLeft">
                    <a ng-click="prevTMI()"><span class="glyphicon glyphicon-chevron-left" ></span>Prev</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollRight">
                    <a ng-click="nextTMI()">Next<span class="glyphicon glyphicon-chevron-right" ></span></a>
                </div>
            </div>
        </div>
        <div ng-show="currentTMI == '6'" class="tmi10ThingsCard col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
            <div>
                <h3>#6 I enjoy Learning</h3>
            </div>

            <div>
                <img class="center-block" src="/assets/tmiIcons/10ThingsIcon6.png">
            </div>

            <div>
                <p>
                    Most of the time its a new technology that peaks my interest.
                    However I do enjoy reading and hearing about other people's experiences within a wide variety of topics including:
                    Business, Psychology, and Engineering.
                </p>
            </div>

            <div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollLeft">
                    <a ng-click="prevTMI()"><span class="glyphicon glyphicon-chevron-left" ></span>Prev</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollRight">
                    <a ng-click="nextTMI()">Next<span class="glyphicon glyphicon-chevron-right" ></span></a>
                </div>
            </div>
        </div>
        <div ng-show="currentTMI == '7'" class="tmi10ThingsCard col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
            <div>
                <h3>#7 I can't swim... yet</h3>
            </div>

            <div>
                <img class="center-block" src="/assets/tmiIcons/10ThingsIcon7.png">
            </div>
            <div>
                <p>
                    I was that kid who always clung to the side of the pool and NEVER ventured out further than arms reach of it.
                    Now I'm an adult who rarely ever goes near the pool.
                </p>
            </div>

            <div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollLeft">
                    <a ng-click="prevTMI()"><span class="glyphicon glyphicon-chevron-left" ></span>Prev</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollRight">
                    <a ng-click="nextTMI()">Next<span class="glyphicon glyphicon-chevron-right" ></span></a>
                </div>
            </div>
        </div>
        <div ng-show="currentTMI == '8'" class="tmi10ThingsCard col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
            <div>
                <h3>#8 I'm not very Tall </h3>
            </div>

            <div>
                <img class="center-block" src="/assets/tmiIcons/10ThingsIcon8.png">
            </div>

            <div>
                <p>I'm 5'6". That is all. <br/>#Touchy subject </p>
            </div>

            <div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollLeft">
                    <a ng-click="prevTMI()"><span class="glyphicon glyphicon-chevron-left" ></span>Prev</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollRight">
                    <a ng-click="nextTMI()">Next<span class="glyphicon glyphicon-chevron-right" ></span></a>
                </div>
            </div>
        </div>
        <div ng-show="currentTMI == '9'" class="tmi10ThingsCard col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
            <div>
                <h3>#9 I'm chronically Efficient</h3>
            </div>

            <div>
                <img class="center-block" src="/assets/tmiIcons/10ThingsIcon9.png">
            </div>
            <div>
                <p>This trait pays off when optimizing business processes.
                    Although my wife gets pretty annoyed when I present her with options for best method of travel based on current traffic and our destination. </p>
            </div>

            <div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollLeft">
                    <a ng-click="prevTMI()"><span class="glyphicon glyphicon-chevron-left" ></span>Prev</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollRight">
                    <a ng-click="nextTMI()">Next<span class="glyphicon glyphicon-chevron-right" ></span></a>
                </div>
            </div>
        </div>
        <div id="tmi10ThingsCard10" ng-show="currentTMI == '10'" class="tmi10ThingsCard col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
            <div>
                <h3>#10 I love what I do</h3>
            </div>

            <div>
                <img class="center-block" src="/assets/tmiIcons/10ThingsIcon10.png">
            </div>

            <div>
                <p>
                    I really find excitement in my daily blend of customer acquisition, business, and web development activities.
                    I love the consistent learning, collaboration, and experiences I gain as I pursue mastery.
                </p>
            </div>

            <div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollLeft">
                    <a ng-click="prevTMI()"><span class="glyphicon glyphicon-chevron-left" ></span>Prev</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 10ThingsScroll 10ThingsScrollRight">
                    <button class="btn btn-danger" ng-click="end10Things()">Done</button>
                </div>
            </div>
        </div>
        <div ng-show="currentTMI == 'done'" class="tmiCard col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
            <div>
                <h3>Ok, that's enough personal stuff.</h3>
            </div>
            <div>
                <img class="center-block" src="/assets/tmiIcons/10ThingsDone.png">
            </div>
            <div>
                <p> How about taking a look at <span class="tmiInnerContentLinks" ng-click="show('resume')">My Resume</span> <span class="hidden767">or reviewing <span class="tmiInnerContentLinks" ng-click="show('skills')">My Skills</span></span>. </p>
            </div>

        </div>
    </div>

    <div id="tmiSkills" class="text-center" ng-show="showing == 'skills'">
        <div class="tmiCard col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
            <div>
                <h3>Wanna review my skills?</h3>
            </div>
            <div>
                <img class="center-block" src="/assets/tmiIcons/skillsLarge.png">
            </div>
            <div>
                <p>I developed an interactive page that can help you quickly determine if I have the skills you are looking for.</p>
                <a href="/skills" target="_blank">Here it is</a>
            </div>
        </div>
    </div>

</div>