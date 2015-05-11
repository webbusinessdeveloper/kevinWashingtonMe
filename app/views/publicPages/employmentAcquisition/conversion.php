<div id="recruitmentConversionBody" class="text-center" ng-controller="conversionController">


    <div id="recruitmentConversionContentHeader">
        <div>
            <h1>Let's Talk!</h1>
        </div>

        <div>
            <p>
                I'm glad you think I could make a good addition to your team.
            </p>
            <p>
                Looking forward to learning more about your opportunity!
            </p>
        </div>

        <div>
            <div class="interviewOrConnectSection">
                <div class="slider-toggle left">
                    <span class="label">Request an interview</span>
              <span ng-click="interviewConnectSettingSwitch()" class="slider">
                    <span class="toggle">
                        <span class="grip"></span>
                    </span>
                </span>
                    <span class="label">Connect with me</span>
                </div>
            </div>
        </div>
        <div id="interviewFormSection" ng-show="interviewConnectSetting == 'interview'">
            <p>Please fill out this short form and I will plan to get back to you with my availability within 24 hours.</p>

            <form>
                <div id="requesterInformation">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="example - Carl Winslow" ng-model="contactName">
                    </div>
                    <div class="form-group">
                        <label for="contactMethod">Best Contact Method</label>
                        <select class="form-control" id="contactMethod"  ng-model="contactMethodValue">
                            <option value="email">Email</option>
                            <option value="phone">Phone</option>
                        </select>
                    </div>
                    <div class="form-group" ng-show="contactMethodValue == 'email'">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="example - carlWinslow@familymatters.com" ng-model="contactEmail">
                    </div>
                    <div class="form-group" ng-show="contactMethodValue == 'phone'">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="example - 610-444-4444" ng-model="contactPhone">
                    </div>
                </div>

                <div id="interviewInformation">
                    <div class="form-group">
                        <label for="interviewType">Interview Type</label>
                        <select class="form-control" id="interviewType" ng-model="interviewTypeValue">
                            <option value="video">Video (Skype, Google Hangouts, etc.)</option>
                            <option value="person">In Person (Reasonably close to Philadelphia only)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="interviewContactPersonDifferent">Interview Contact Different from above?</label>
                        <input type="checkbox" id="interviewContactPersonDifferent" value="true"  ng-model="interviewContactPersonDifferentValue">
                    </div>
                    <div ng-show="interviewContactPersonDifferentValue">
                        <div class="form-group">
                            <label for="interviewContactPersonName">Contact Person's Name</label>
                            <input type="text" class="form-control" id="interviewContactPersonName" ng-model="interviewContactPersonName" placeholder="example - Laura Winslow">
                        </div>
                        <div class="form-group">
                            <label for="interviewContactMethod">Best Contact Method</label>
                            <select class="form-control" id="interviewContactMethod"  ng-model="interviewContactMethodValue">
                                <option value="email">Email</option>
                                <option value="phone">Phone</option>
                            </select>
                        </div>
                        <div class="form-group" ng-show="interviewContactMethodValue == 'email'">
                            <label for="interviewEmail">Contact Person's Email</label>
                            <input type="email" class="form-control" id="interviewEmail" placeholder="example - lauraWinslow@familymatters.com" ng-model="interviewContactEmail">
                        </div>
                        <div class="form-group" ng-show="interviewContactMethodValue == 'phone'">
                            <label for="interviewPhone">Contact Person's Phone</label>
                            <input type="text" class="form-control" id="interviewPhone" placeholder="example - 610-444-4444" ng-model="interviewContactPhone">
                        </div>
                    </div>

                </div>

                <div id="positionInformation">

                </div>

                <button type="submit" class="btn btn-default">Submit</button>
                {{interviewContactPersonName}}
                {{interviewContactMethodValue}}
                {{interviewContactEmail}}
                {{interviewContactPhone}}
            </form>

            <!--

            interview
                contact person to schedule interview
                    same as above
                    or
                    new space for new name
                    new space for new contact method
                    new space for new contact info (phone / email)

            position information
                company
                info about the roles/ responsiblities
                remote
                    true
                    false
                    both
                type
                    full time
                    part time
                    project
                compensation
                    slider
                    don’t know yet




            -->
        </div>
        <div id="connectFormSection" ng-show="interviewConnectSetting == 'connect'">
            <p>This will be the connect form. </p>
        </div>
    </div>
</div>