<div id="acquisitionPresentationContainer" class="text-center" ng-controller="acquisitionPresentationController">

    <div id="acquisitionPresentationContentHeader">
        <div id="acquisitionPresentationContentTitle">
            <h1>Stepping into the {{roleTitle}} role @ {{companyName}}</h1>
        </div>
        <div id="acquisitionPresentationContentSubTitle">
            <p>A light look at how I would own the {{roleTitle}} position if given the opportunity.</p>
        </div>
    </div>

    <div id="acquisitionPresentationContentMainImage">
        <img ng-src="/assets/acquisitionPresentation/{{companyName}}.png">
    </div>

    <div id="acquisitionPresentationObjectiveContent">
        <div id="acquisitionPresentationObjectiveTitle">
            <h1>My Objectives</h1>
            <p>As I see them currently</p>
        </div>
        <div id="acquisitionPresentationObjectiveImage">
            <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/myObjectives.png">
        </div>
        <div id="acquisitionPresentationObjectiveList">
            <p>1. {{objective1}}</p>
            <p>2. {{objective2}}</p>
            <p>3. {{objective3}}</p>
        </div>
    </div>

    <div id="acquisitionPresentationPrimaryObjectiveContent">
        <div id="acquisitionPresentationPrimaryObjectiveTitle">
            <h1>The Primary Objective</h1>
        </div>
        <div id="acquisitionPresentationPrimaryObjectiveImage">
            <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/primaryObjective.png">
        </div>
        <div id="acquisitionPresentationPrimaryObjectiveStated">
            <p>{{primaryObjective}}</p>
        </div>
    </div>

    <div id="acquisitionPresentationMyPlanContent">
        <div id="acquisitionPresentationMyPlanTitle">
            <h1>How I plan on doing this</h1>
            <p>My 5 step process</p>
        </div>
        <div id="acquisitionPresentationMyPlanImage">
            <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/planToDoIt.png">
        </div>
    </div>

    <div id="acquisitionPresentationStepOneContent">
        <div id="acquisitionPresentationStepOneImage">
            <img class="img-circle img-responsive center-block" src="/assets/numberIcons/1.png">
        </div>
        <div id="acquisitionPresentationStepOneTitle">
            <h2>Understanding our target market</h2>
        </div>
        <div id="acquisitionPresentationStepOneGroups" class="row">
            <div class="col-lg-6" id="acquisitionPresentationStepOneGroupOne">
                <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/group1.png">
                <p>{{group1}}</p>
            </div>
            <div class="col-lg-6"  id="acquisitionPresentationStepOneGroupTwo">
                <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/group2.png">
                <p>{{group2}}</p>
            </div>
        </div>
        <div id="acquisitionPresentationStepOneAdditional">
            <div id="acquisitionPresentationStepOneAdditionalTitle">
                <h3>Additional Informational</h3>
                <p>Some extra information we should know about the markets.</p>
            </div>
            <div id="acquisitionPresentationStepOneAdditionalList">
                <h4>What do they care about?</h4>
                <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/careAbout.png">
                <h4>Where are they online?</h4>
                <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/whereAreThey.png">
                <h4>Can they be broken down further into smaller segments?</h4>
                <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/segments.png">
            </div>
        </div>
    </div>

    <div id="acquisitionPresentationStepTwoContent">
        <div id="acquisitionPresentationStepTwoImage">
            <img class="img-circle img-responsive center-block" src="/assets/numberIcons/2.png">
        </div>
        <div id="acquisitionPresentationStepTwoTitle">
            <h2>Architect Acquisition Channels</h2>
        </div>
        <div id="acquisitionPresentationStepTwoGroups" class="row">
            <div class="col-lg-6" id="acquisitionPresentationStepTwoGroupOneChannel">
                <div id="groupOneChannelTarget">
                    <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/group1.png">
                    <p><span class="bold">Target:</span> {{group1}}</p>
                </div>
                <div id="groupOneChannelArrowOne">
                    <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/arrow.png">
                </div>
                <div id="groupOneChannelEngagement">
                    <img class="img-responsive center-block" src="/assets/acquisitionPresentation/group1And2Engagement.png">
                    <p><span class="bold">Sample article:</span> "{{group1EngagementTitle}}"</p>
                </div>
                <div id="groupOneChannelArrowTwo">
                    <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/arrow.png">
                </div>
                <div id="groupOneChannelDemonstration">
                    <img class="img-responsive center-block" src="/assets/acquisitionPresentation/group1And2Demo.png">
                    <p><span class="bold">Benefits to stress:</span> {{group1DemoDescription}}</p>
                </div>
                <div id="groupOneChannelArrowThree">
                    <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/arrow.png">
                </div>
                <div id="groupOneChannelConversion">
                    <img class="img-responsive center-block" src="/assets/acquisitionPresentation/group1And2Conversion.png">
                    <p><span class="bold">Conversion page description:</span> {{group1ConversionDescription}}</p>
                </div>

            </div>
            <div class="col-lg-6"  id="acquisitionPresentationStepTwoGroupTwoChannel">
                <div id="groupTwoChannelTarget">
                    <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/group2.png">
                    <p><span class="bold">Target:</span> {{group2}}</p>
                </div>
                <div id="groupTwoChannelArrowOne">
                    <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/arrow.png">
                </div>
                <div id="groupTwoChannelEngagement">
                    <img class="img-responsive center-block" src="/assets/acquisitionPresentation/group1And2Engagement.png">
                    <p><span class="bold">Sample article:</span> "{{group2EngagementTitle}}"</p>
                </div>
                <div id="groupTwoChannelArrowTwo">
                    <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/arrow.png">
                </div>
                <div id="groupTwoChannelDemonstration">
                    <img class="img-responsive center-block" src="/assets/acquisitionPresentation/group1And2Demo.png">
                    <p><span class="bold">Benefits to stress:</span> {{group2DemoDescription}}</p>
                </div>
                <div id="groupTwoChannelArrowThree">
                    <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/arrow.png">
                </div>
                <div id="groupTwoChannelConversion">
                    <img class="img-responsive center-block" src="/assets/acquisitionPresentation/group1And2Conversion.png">
                    <p> <span class="bold">Conversion page description:</span> {{group2ConversionDescription}}</p>
                </div>
            </div>
        </div>
    </div>

    <div id="acquisitionPresentationStepThreeContent">
        <div id="acquisitionPresentationStepThreeImage">
            <img class="img-circle img-responsive center-block" src="/assets/numberIcons/3.png">
        </div>
        <div id="acquisitionPresentationStepThreeTitle">
            <h2>Prevent Funnel DropOffs</h2>
        </div>
        <div id="acquisitionPresentationStepThreeBody">
            <div id="acquisitionPresentationStepThreeBodyImage">
                <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/preventDrops.png">
            </div>
            <div class="row" id="acquisitionPresentationStepThreeBodyList">
                <div class="col-lg-6">
                    <h4>Re-Marketing/Targeting</h4>
                </div>
                <div class="col-lg-6">
                    <h4>Email Capture for Drip Campaigns</h4>
                </div>
            </div>
        </div>
    </div>

    <div id="acquisitionPresentationStepFourContent">
        <div id="acquisitionPresentationStepFourImage">
            <img class="img-circle img-responsive center-block" src="/assets/numberIcons/4.png">
        </div>
        <div id="acquisitionPresentationStepFourTitle">
            <h2>Funnel Initiation Strategy</h2>
        </div>
        <div class="row" id="acquisitionPresentationStepFourBody">
            <div class="col-lg-3" id="acquisitionPresentationStepFourPhone">
                <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/phone.png">
            </div>
            <div class="col-lg-3" id="acquisitionPresentationStepFourEmail">
                <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/email.png">
            </div>
            <div class="col-lg-3" id="acquisitionPresentationStepFourDirect">
                <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/direct.png">
            </div>
            <div class="col-lg-3" id="acquisitionPresentationStepFourPaid">
                <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/paid.png">
            </div>
        </div>
    </div>

    <div id="acquisitionPresentationStepFiveContent">
        <div id="acquisitionPresentationStepFiveImage">
            <img class="img-circle img-responsive center-block" src="/assets/numberIcons/5.png">
        </div>
        <div id="acquisitionPresentationStepFiveTitle">
            <h2>Track & Refine</h2>
        </div>
        <div class="row" id="acquisitionPresentationStepFiveBody">
            <div class="col-lg-6">
                <h3>Data Gathering</h3>
                <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/dataGathering.png">
                <p>Google Analytics</p>
                <p>Clicky</p>
            </div>
            <div class="col-lg-6">
                <h3>Running Experiments</h3>
                <img class="img-circle img-responsive center-block" src="/assets/acquisitionPresentation/runningExperiments.png">
                <p>VWO</p>
                <p>Optimizely</p>
            </div>
        </div>
    </div>


</div>