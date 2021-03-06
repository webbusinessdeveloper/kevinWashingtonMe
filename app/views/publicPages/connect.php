<div ng-controller="connectController">


    <div id="contactNav" >
        <div class="row text-center" id="contactNavHeader">
            <h2 class="hidden767 pageTitle">4 ways to connect with me. Choose 1.</h2>
            <h2 class="show767 pageTitle">Give me a call!</h2>
        </div>
        <div class="row text-center" id="contactNavList">

                <div class="hidden767 imageContainer img-responsive col-sm-3 col-md-3 col-lg-3" ng-class="{'activeImage': showing == 'form' }"><a ng-click="show('form')"><img class="contactImage" src="/assets/connectIcons/KWICONinquiry.png"></a></div>

                <div class="hidden767 imageContainer img-responsive col-sm-3 col-md-3 col-lg-3" ng-class="{'activeImage': showing == 'email' }"><a ng-click="show('email')"><img class="contactImage" src="/assets/connectIcons/KWICONemail.png"></a></div>

                <div class="hidden767 imageContainer img-responsive col-sm-3 col-md-3 col-lg-3" ng-class="{'activeImage': showing == 'skype' }"><a ng-click="show('skype')"><img class="contactImage" src="/assets/connectIcons/KWICONskype.png"></a></div>

                <div class="hidden767 imageContainer img-responsive col-sm-3 col-md-3 col-lg-3" ng-class="{'activeImage': showing == 'voiceMail' }"><a ng-click="show('voiceMail')"><img class="contactImage" src="/assets/connectIcons/KWICONphone.png"></a></div>

        </div>

    </div>


    <div id="contactForm" class="col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1" ng-if="showing == 'form'">
        <div id="contactFormHeader" class="text-center">
            <h4>Fill out this short Form</h4>
<!--            <p class="bodyText">A quick way to get in touch with me. When happy with your message just hit send.</p>-->
            <img src="/assets/connectIcons/KWICONinquirySmall.png">

        </div>

        <div ng-show="message" class="alert alert-warning">
            {{message}} <a href="/">Dismiss</a>
        </div>

        <div id="contactFormInputs" class="col-md-6">
            <form class="form-horizontal" name="inquiryForm">


                <div class="form-group">
                    <label for="body" >Use this space to give me some details:</label>
                        <textarea name="body" ng-model="inquiryBody" placeholder="{{inquiryBodyPlaceholder}}" class="form-control" rows="10" cols="30"></textarea>
                </div>

                <div class="form-group">
                    <label for="name" class="text-center">What's your name? </label>
                    <input type="text" ng-model="inquiryName"  class="form-control input-lg" name="name" id="name" placeholder="example: 'Carl Winslow' ">

                </div>

                <div class="form-group">
                    <label for="contactMethod" ng-model="inquiryContactMethod" class="text-center">How should I respond? (select one) </label>
                    <select ng-model="inquiryContactMethod" class="form-control input-lg">
                        <option>Email</option>
                        <option>Phone</option>
                    </select>
                </div>


    <!--            ONe of the below groups should be hidden based on previous input value-->
                <div class="form-group" ng-show="inquiryContactMethod == 'Email'">
                    <label for="email" class="text-center">Enter your email: </label>
                    <input type="email" ng-model="inquiryEmail" class="form-control input-lg" name="email" id="email" placeholder="example: 'carl@familyMatters.com'">

                </div>
                <div class="form-group" ng-show="inquiryContactMethod == 'Phone'">
                    <label for="phone" class="text-center">Enter your phone: </label>
                    <input type="text" ng-model="inquiryPhone"  class="form-control input-lg" name="phone" id="phone" placeholder="example: '215-445-0004'">

                </div>


    <!--        inputs form-->
    </div>
        <div id="contactFormPreview" class="col-md-6" >
            <div  style="min-height: 500px;">

                <h3 class="text-center" ng-hide="(inquiryBody || inquiryName || inquiryContactMethod)">Preview your message here.</h3>

                <div class="text-center" ng-show="(inquiryBody || inquiryName || inquiryContactMethod)">
                    <h3>Message Preview</h3>
                    <h4 class="subText">Fill out all info in order to submit the form.</h4>
                </div>

                <div>
                    <h4 ng-show="inquiryBody">My Message: </h4>
                    <p>{{inquiryBody}}</p>
                </div>

                <div>
                    <h4 ng-show="inquiryName">My Name: </h4>
                    <p>{{inquiryName}}</p>
                </div>

                <div>
                    <h4 ng-show="inquiryContactMethod">Reach Me By: </h4>
                    <p>{{inquiryContactMethod}}</p>
                </div>

                <div>
                    <h4 ng-show="inquiryEmail">My Email: </h4>
                    <p>{{inquiryEmail}}</p>
                </div>

                <div>
                    <h4 ng-show="inquiryPhone">My Phone Number: </h4>
                    <p>{{inquiryPhone}}</p>
                </div>



                <div ng-if="(inquiryBody && inquiryName && inquiryContactMethod) && (inquiryEmail || inquiryPhone)">
                    <button class="btn btn-warning btn-lg center-block" ng-if="inquiryBody" ng-click="newInquiry(inquiryBody, inquiryName, inquiryContactMethod, inquiryEmail, inquiryPhone)">Send my inquiry!</button>
                </div>
            </div>
        </div>


    </div>




    <div class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3  contactSection text-center" ng-if="showing == 'email'">
        <h4>Send me an Email</h4>
        <img src="/assets/connectIcons/KWICONemailSmall.png">
        <h5>hello@kevinwashington.me</h5>
        <p class="bodyText">{{helperMessage}}</p>
    </div>


    <div class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 contactSection text-center" ng-if="showing == 'skype'">
        <h4>Add me on Skype</h4>
        <img src="/assets/connectIcons/KWICONskypeSmall.png">
        <h5>@web_business_developer</h5>
        <p class="bodyText">{{helperMessage}}</p>
    </div>


    <div class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 contactSection text-center" ng-if="showing == 'voiceMail'">
        <h4>Leave me a Message</h4>
        <img src="/assets/connectIcons/KWICONphoneSmall.png">
        <h5>(609) 416-1077</h5>
        <p class="bodyText">{{helperMessage}}</p>
    </div>
</div>