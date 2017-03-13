@extends('documentations::layouts.app')

@section('title')
    Table Of Contents
@endsection

@section('container')
    <div class="doc-wrapper">
        <div class="container">
            <div id="doc-header" class="doc-header text-center">
                <h1 class="doc-title"><span aria-hidden="true" class="icon icon_puzzle_alt"></span> GETTING STARTED</h1>
                <div class="meta"><i class="fa fa-clock-o"></i> Last updated: Feb 9th, 2017</div>
            </div><!--//doc-header-->
            <div class="doc-body">
                <div class="doc-content">
                    <div class="content-inner">
                        <section id="login" class="doc-section">
                            <h2 class="section-title">Login to your TrueSight account</h2>
                            <div class="section-block">
                                <p>In this module, you must have a user account to access the “TrueSight Website” Module.</p>
                                <ol class="list">
                                    <li>Enter your Username and Password.</li>
                                    <li>Click “<b>Log In</b>” button.</li>
                                    <li>You will be directed at the Homepage of the website.</li>
                                </ol>
                                <img class="img-responsive" src="images/login-page.png" alt="login page screen shot">
                            </div>
                        </section>

                        <section id="familiarize" class="doc-section">
                            <h2 class="section-title">Familiarize TrueSight’s header and footer</h2>
                            <div class="section-block">
                                <p>This module contains three main components: (1) <b><a class="scrollto" href="#familiarize-sidebar">Sidebar Menu</a></b>, (2) <b><a class="scrollto" href="#familiarize-truesight-logo">TrueSight Logo</a></b>, (3) <b><a class="scrollto" href="#familiarize-company-logo">Company Logo</a></b> and (4) <b><a class="scrollto" href="#familiarize-user-profile">User Profile</a></b> pane.</p>
                                <img class="img-responsive" src="images/header.png" alt="header screen shot">
                            </div>
                        </section>

                        <section id="familiarize-sidebar" class="doc-section">
                            <h3 class="text-highlight">Sidebar Menu</h3>
                            <div class="section-block">
                                <p>This modules contains the all the menus of TrueSight.</p>
                                <img class="img-responsive" src="images/sidebar.png" alt="sidebar screen shot">
                            </div>
                        </section>

                        <section id="familiarize-truesight-logo" class="doc-section">
                            <h3 class="text-highlight">TrueSight Logo</h3>
                            <div class="section-block">
                                <p>This modules contains the TrueSight Logo.</p>
                                <img class="img-responsive" src="images/truesight-logo.png" alt="truesight logo">
                            </div>
                        </section>

                        <section id="familiarize-company-logo" class="doc-section">
                            <h3 class="text-highlight">Company Logo</h3>
                            <div class="section-block">
                                <p>This modules contains the Logo of your company in which an authorized user can upload their own logo. See <a class="scrollto" href="#config-basic-setup">MANAGE BASIC CONFIGURATION: Basic Setup</a> section for more details.</p>
                                <img class="img-responsive" src="images/company-logo.png" alt="company logo">
                            </div>
                        </section>

                        <section id="familiarize-user-profile" class="doc-section">
                            <h3 class="text-highlight">User Profile</h3>
                            <div class="section-block">
                                <p>This modules contains “<b>Change your own Password</b>” and “<b>Log Out</b>” navigations.</p>
                                <img class="img-responsive" src="images/user-profile.png" alt="user profile screen shot">
                            </div>

                            <div class="section-block" id="change-your-own-password">
                                <h4>To change your own password</h4>
                                <ol class="list">
                                    <li>Click the “<b>Change Password</b>” module.</li>
                                    <li>
                                        You’ll be directed to Change Password page, click the “<b>Password</b>” tab.
                                        <img class="img-responsive" src="images/user-profile-update-password.png" alt="change password screen shot">
                                    </li>
                                    <li>Click “<b>Change Password</b>” once done.</li>
                                </ol>
                            </div>

                            <div class="section-block">
                                <h4>To view your own user profile</h4>
                                <ol class="list">
                                    <li>
                                        In the Change Password page, click the “<b>Personal Information</b>” tab.
                                        <img class="img-responsive" src="images/user-profile-information.png" alt="user profile information screen shot">
                                    </li>
                                </ol>
                            </div>
                        </section>

                        <section id="home-basic" class="doc-section">
                            <h2 class="section-title">Homepage Basics</h2>
                            <div class="section-block">
                                <p>Home is TrueSight’s default page. Here you can see a summary of the Compliance Scores per site as well as a listing of upcoming Events (Announcements).</p>
                                <h3>Manage Events</h3>
                                <p>Events allows the company to notify system users of upcoming events relevant to compliance.   Viewing of events can be restricted per site. System will automatically compute for the number of days (countdown) before the due date of created events.</p>
                            </div>
                        </section>

                        <section id="create-event" class="doc-section">
                            <h4>Create an Event</h4>
                            <p>To create an Event in the Homepage, your user account needs to have a “View” and “Create” access to the “Home” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Home</b>” module in the Menu.</li>
                                <li>
                                    In the Upcoming Events Pane, Click the “<b>Add</b>” button.
                                    <img class="img-responsive" src="images/upcoming-events.png" alt="upcoming events screen shot">
                                </li>
                                <li>
                                    A pop-up interface will appear. Complete the details of the “Add Event” pop-up interface.
                                    <img class="img-responsive" src="images/create-event-modal.png" alt="creating event screen shot">
                                </li>
                                <li>Once done completing, press the “<b>Create</b>” button.</li>
                            </ol>
                        </section>

                        <section id="view-event" class="doc-section">
                            <h4>View an Event</h4>
                            <p>To view an Event in the Homepage, your user account needs to have a “View Event” access to the “Home” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Home</b>” module in the Menu.</li>
                                <li>In the Upcoming Events Pane, select the Event that you which to modify.</li>
                                <li>Press the “<b>View</b>” <i class="fa fa-search"></i> button corresponding the Event that you wish to view.</li>
                                <li>
                                    A pop-up interface (View Event) will appear containing the details of the Event that you wish to view.
                                    <img class="img-responsive" src="images/view-event-modal.png" alt="viewing an event screen shot">
                                </li>
                                <li>Once done viewing, press the “<b>Close</b>” button.</li>
                            </ol>
                            <div class="callout-block callout-info">
                                <div class="icon-holder">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="content">
                                    <h4 class="callout-title">Note:</h4>
                                    <p>You can only view and modify Events tagged under the Site to which your user account belong to. Events tagged under sites outside your assigned site will not be made available to you for viewing and modification. See <a class="scrollto" href="#restrict-event">Restrict Viewing of Events</a> section for more details.</p>
                                </div>
                            </div>
                        </section>

                        <section id="modify-event" class="doc-section">
                            <h4>Modify an Event</h4>
                            <p>To modify an Event in the Homepage, your user account needs to have a “View” and “Modify” access to the “Home” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Home</b>” module in the Menu.</li>
                                <li>In the Upcoming Events Pane, select the Event that you which to modify.</li>
                                <li>Press the “<b>Modify</b>” <i class="fa fa-edit"></i> button corresponding the Event that you wish to modify.</li>
                                <li>
                                    A pop-up interface (Modify Event) will appear containing the details of the Event that you wish to modify. Change the details as you see fit.
                                    <img class="img-responsive" src="images/modify-event-modal.png" alt="modifying an event screen shot">
                                </li>
                                <li>Once done viewing, press the “<b>Close</b>” button.</li>
                            </ol>
                            <div class="callout-block callout-info">
                                <div class="icon-holder">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="content">
                                    <h4 class="callout-title">Note:</h4>
                                    <p>You can only view and modify Events tagged under the Site to which your user account belong to. Events tagged under sites outside your assigned site will not be made available to you for viewing and modification. See <a class="scrollto" href="#restrict-event">Restrict Viewing of Events</a> section for more details.</p>
                                </div>
                            </div>
                        </section>

                        <section id="delete-event" class="doc-section">
                            <h4>Delete an Event</h4>
                            <p>To delete an Event in the Homepage, your user account needs to have a “View” and “Delete” access to the “Home” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Home</b>” module in the Menu.</li>
                                <li>In the Upcoming Events Pane, select the Event that you which to delete.</li>
                                <li>Press the “<b>Modify</b>” <i class="fa fa-remove"></i> button corresponding the Event that you wish to delete.</li>
                                <li>
                                    A pop-up interface will appear confirming the deletion of the Event. Press the “<b>Yes</b>” button if you wish to proceed with the deletion of the event.
                                    <img class="img-responsive" src="images/delete-event-modal.png" alt="deleting an event screen shot">
                                </li>
                            </ol>
                            <div class="callout-block callout-info">
                                <div class="icon-holder">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="content">
                                    <h4 class="callout-title">Note:</h4>
                                    <p>You can only view and modify Events tagged under the Site to which your user account belong to. Events tagged under sites outside your assigned site will not be made available to you for viewing and modification. See <a class="scrollto" href="#restrict-event">Restrict Viewing of Events</a> section for more details.</p>
                                </div>
                            </div>
                        </section>

                        <section id="restrict-event" class="doc-section">
                            <h4>Restrict Viewing of Events</h4>
                            <p>While Events serve as announcements to users for upcoming events related to compliance, one can restrict the viewing and managing of the events only to specific sites. This would prove to be very helpful if the Event created is site-specific.</p>
                            <ol class="list">
                                <li>Click the “<b>Home</b>” module in the Menu.</li>
                                <li>In the Upcoming Events Pane, Click the “<b>Add</b>” button if you wish to create a new event and add further restrictions to it. Click the “<b>Modify</b>” <i class="fa fa-edit"></i> button if you wish to add viewing restrictions to an already existing event.</li>
                                <li>
                                    A pop-up interface will appear prompting you to either complete the details for an “Add New Event” scenario or change the details for a “Modify an Existing” event scenario.
                                    <img class="img-responsive" src="images/create-event-modal.png" alt="creating an event screen shot">
                                </li>
                                <li>
                                    You can restrict viewing and managing of the event in the “<b>Scope</b>” section of the Event interface.
                                    You can define/restrict access in the “<b>Site</b>” field
                                    <ol type="a">
                                        <li>You can choose “All” if you want users of all registered sites to have access to the event.</li>
                                        <li>Otherwise, you can restrict access to selected sites by choosing one or more sites. In our sample above, event viewing is restricted only to the Ortigas Site. You can add additional sites by typing the name of the other site you wish to be added to the field.</li>
                                    </ol>
                                </li>
                                <li>Once done filling out the “Site” field, press the “<b>Save</b>” button.</li>
                            </ol>
                            <div class="callout-block callout-success">
                                <div class="icon-holder">
                                    <i class="fa fa-thumbs-up"></i>
                                </div>
                                <div class="content">
                                    <h4 class="callout-title">Tip:</h4>
                                    <p>System has an <b>auto-complete</b> feature where you just type the initial letter of the site you wish to add and then system will populate through a dropdown option the registered sites available which starts with the initial letters you inputted. You can then just choose from the dropdown list instead of manually typing the complete site name.</p>
                                </div>
                            </div>
                        </section>

                        <section id="home-familiarize" class="doc-section">
                            <h2 class="section-title">Familiarize Your Homepage</h2>
                            <div class="section-block">
                                <p>Home is TrueSight’s default page. This module contains three main components: (1) <b>Upcoming Events</b> pane, (2) <b>Overall Compliance</b> pane, and (3) <b>Compliance Breakdown per Site</b> pane.</p>
                            </div>
                        </section>

                        <section id="upcoming-events" class="doc-section">
                            <h4>Upcoming Events Pane</h4>
                            <p>Upcoming Events Pane is located in the upper portion of the Home Module.</p>
                            <img class="img-responsive" src="images/upcoming-events-pane.png" alt="upcoming events pane screen shot">
                            <p>Events Pane function like an announcement section in that it allows the company to notify system users of upcoming events relevant to compliance.   Aside from the Event details, Event Date, system will automatically compute and show the number of days (countdown) before the due date of created events. To know more about how to create and manage Events, see the <a class="scrollto" href="#home-basic">Manage Events</a> section of this manual.</p>
                        </section>

                        <section id="overall-compliance" class="doc-section">
                            <h4>Overall Compliance Pane</h4>
                            <p>Overall Compliance Pane is located in the lower left portion of the Home Module.</p>
                            <img class="img-responsive" src="images/overall-compliance-pane.png" alt="overall compliance pane screen shot">
                            <p>Overall Compliance Pane shows a listing of the different sites/branch enrolled in the system together with its corresponding compliance scores for a certain framework selected in the dropdown. It also shows the overall percentage compliance of the company / organization by consolidating the scores of all sites under it. To display the scores of the sites for another framework, user will just choose the desired framework from the “Framework” dropdown list.</p>
                            <div class="callout-block callout-info">
                                <div class="icon-holder">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="content">
                                    <h4 class="callout-title">Note:</h4>
                                    <p>Sites registered under each framework may vary. One site may be required to comply with a certain framework while another site is not required. Therefore, it is possible to see one site displayed in the Overall Compliance pane for a certain framework but is not displayed for another framework.</p>
                                </div>
                            </div>
                            <p>You can check detailed scores (per chapter / per department & historical), in the Compliance Summary Module. For a guideline on how to navigate through the Compliance Summary module, see the <a class="scrollto" href="#navigate-compliance-status-per-site">SUMMARY OF COMPLIANCE: Navigate through Compliance Status per Site</a> section.</p>
                        </section>

                        <section id="breakdown-compliance" class="doc-section">
                            <h4>Compliance Breakdown per Site Pane</h4>
                            <p>Compliance Breakdown per Site Pane is located in the lower right portion of the Home Module.</p>
                            <img class="img-responsive" src="images/breakdown-compliance-pane.png" alt="breakdown compliance pane screen shot">
                            <p>The Compliance Breakdown presents a per chapter/domain compliance scores of each site as well as a quick statistics of the overall status of compliance for that site as depicted by the pie and bar graphs.</p>
                            <p>To get a zoomed in view of the graphs, just click the ”<b>View Larger</b>” button. Another interface will pop-up containing a bigger version of the graphs. Pop-up interface will also allow you to navigate through compliance graphs of the various sites registered as well as various frameworks available.</p>
                            <img class="img-responsive" src="images/breakdown-compliance-modal.png" alt="breakdown compliance modal screen shot">
                            <p>You can check detailed scores (per chapter / per department & historical), in the Compliance Summary Module. For a guideline on how to navigate through the Compliance Summary module, see the <a class="scrollto" href="#navigate-compliance-status-per-site">SUMMARY OF COMPLIANCE: Navigate through Compliance Status per Site</a> section.</p>
                        </section>

                        <section id="standard-compliance" class="doc-section">
                            <h2 class="section-title">Standards & Compliance Elements</h2>
                            <div class="section-block">
                                <p>TrueSight is designed to serve as a platform for the submission and assessment of evidences of compliance to measurable/compliance elements. Assessment scores will be consolidated by the system to come up with percentage of compliance scores for each site / department. In this section, we will be giving out detailed instructions on how to create and manage compliance elements.</p>
                                <h3 id="manage-chapters-standards">Manage Chapters & Standards</h3>
                                <p>As we manage and monitor the levels of compliance using TrueSight, we will come across the terms/jargons of Framework, Chapters and Standards. While in the real world these terms are interrelated, for purposes of creating a system hierarchy, we will be using these terms as follows:</p>
                                <dl class="list">
                                    <dt>Frameworks</dt>
                                    <dd>Is highest level (Level 0) and in the real world can actually be called compliance standards. Framework is a structured set of guidelines that details an organization's processes for complying with established regulations, specifications or legislation.  Example could be JCI Standards for hospitals, ISO 27001 and PCI: DSS for information security, etc.</dd>
                                    <br/>
                                    <dt>Chapters</dt>
                                    <dd>Frameworks are divided into subgroups to (Level 1) better organize the different requirements. In TrueSight we use the terms Chapter for this.  Some regulatory standards, use the term “Domain” to call this subgroups.</dd>
                                    <br/>
                                    <dt>Standards</dt>
                                    <dd>Chapters for further subdivided into groups (Level 2). In TrueSight we use the term “Standards” for such subgroups. While in the real world the term “Standard” may refer to the Framework we described above, for purposes of the system hierarchy, we will use “Standards” as the Level 2 subgrouping.</dd>
                                    <br/>
                                    <dt>Elements</dt>
                                    <dd>These are the detailed requirements that needs to be met in order to comply with the Framework. In some Framework (Standards), these are sometimes called “Controls,” “Compliance Elements” or “Measurable Elements.”</dd>
                                </dl>
                                <p>Below is a graphical representation of the system hierarchy that we use in TrueSight:</p>
                                <img class="img-responsive" src="images/graphical-hierarchy.png" alt="graphical representation of system hierarchy">
                            </div>
                        </section>

                        <section id="create-framework-compliance" class="doc-section">
                            <h4>Create Framework Account</h4>
                            <p>Creation of “Framework” accounts is restricted from any users.  Should your company/organization need to create an additional Framework account, you can contact us through our TODODDODDOODODODOcontact information at the end of this manual. Our technical support team will visit your office to create the account.</p>
                        </section>

                        <section id="create-chapters-standards-compliance" class="doc-section">
                            <h4>Create Chapters & Standards</h4>
                            <p>Only authorized users can create and manage Chapters & Standards. To create a chapters & standards, your user account needs to have a “View” and “Create” access permission to the “Compliance Elements” Module > “<b>Elements Master File</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Elements</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Compliance Elements”. Click the “<b>Elements Master File</b>” submodule.</li>
                                <li>In the Compliance Elements Master File interface, click the “<b>Create New Chapter</b>” button located at the top right portion of the interface.</li>
                                <li>
                                    Another pop-up interface will appear. Complete the initial details of the “<b>Create Chapter/Standard</b>” pop-up interface as follows:
                                    <img class="img-responsive" src="images/create-chapter-modal.png" alt="create chapter modal">
                                </li>
                                <li>Once done completing, press the “<b>Create Chapter</b>” button.</li>
                                <li>
                                    The Chapter account has initially been created. Now you can start creating a Standard account. Press “<b>Add Standard</b>” button to create a standard account within your newly created Chapter account.
                                    <img class="img-responsive" src="images/create-chapter-expanded-modal.png" alt="create chapter modal">
                                </li>
                                <li>
                                    A pop-up interface will appear. First, make sure that the standard account you will be creating is tagged under the correct Framework and Chapter account.  If not correctly tagged, kindly choose the appropriate Framework and Chapter account by choosing from the dropdown list corresponding to the same in the Standards Applicability section of the pop-up interface.
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Enabled Standard Title Field</label>
                                            <img class="img-responsive" src="images/create-standard-with-title.png" alt="create standard with title modal">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Disabled Standard Title Field</label>
                                            <img class="img-responsive" src="images/create-standard-without-title.png" alt="create standard without title modal">
                                        </div>
                                    </div>

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>You can customize “Standard Attributes”. You can enable or disable the “Standard Name”. See <a class="scrollto" href="#config-basic-setup">Manage Basic Configurations: Basic Setup</a> section for more details. </p>
                                        </div>
                                    </div>
                                </li>
                                <li>Complete the details of the “<b>Add Standard</b>” pop-up interface.</li>
                                <li>
                                    If you want to have the Standard and corresponding elements under it “enabled”, then click the check box besides “<b>Enabled</b>” option. Otherwise, leave it blank.

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>“Enabled” option is like a master switch for the elements under that particular standard. If the Standard is disabled (i.e. the Enabled checkbox is unticked), then all elements tagged under that Standard account will be disabled / inactive.  Meaning those elements will not be available for the evidence submissions & scoring.</p>
                                        </div>
                                    </div>
                                </li>
                                <li id="create-chapter-and-standard-step-10">
                                    If you want the fields of the Standard account to be protected from erroneous modification, then click the check box besides the “<b>Locked Fields</b>” option. Otherwise, leave it blank.

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>Lock fields is an optional precautionary measure we placed in each Standard account to protect the same from erroneous modification of Standard details.  If a Standard has “lock fields” option enabled/checked, users trying to modify the details / attributes of that particular Standard account will have to untick the Lock Fields checkbox first before the user can effect changes to the same (i.e. before user can change the Standard name & details and/or enable disable the standard).  This is particularly helpful in protecting the Standard account from erroneous unticking of the “Enabled” option which automatically disables the standards and all elements under it.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>Once done completing the details of the Standard, press the “<b>Create</b>” button. You will be redirected back to the “<b>Create Chapter/Standard</b>” interface, this time with the newly created Standard account listed under the Chapter.</li>
                                <li>If you want to create additional Standard accounts within the same Chapter, press the “<b>Add Standard</b>” button and repeat steps 7 to 11 of this section.</li>
                                <li>Once done creating Standard accounts press the “<b>Save</b>” button in the “Create Chapter/Standard” interface to finalize the creation of both the Chapter Account and the corresponding Standard Accounts.</li>
                                <li>
                                    Another way of creating a standard is by selecting a chapter and standard in the dropdown list and clicking the “<b>Add Standard</b>” button in the Elements per Standard Pane. Then, repeat steps 7 to 10. Once done completing the details of the Standard, press the “<b>Create</b>” button. You will be redirected back to the “<b>Compliance Elements Master File</b>” interface, this time with the newly created Standard account listed under the standard dropdown list.
                                    <img class="img-responsive" src="images/chapter-standard-information.png" alt="created chapter and standard screen shot">
                                </li>
                            </ol>
                        </section>

                        <section id="modify-chapters-standards-compliance" class="doc-section">
                            <h4>Modify Chapters & Standards</h4>
                            <p>Only authorized users can view and modify Chapters & Standards. To modify chapters & standards, your user account needs to have a “View” and “Modify” access permissions to the “Compliance Elements” Module > “<b>Elements Master File</b>” Submodule. Modifying Chapters & Standards both have similar initial steps as follows:</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Elements</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Compliance Elements”. Click the “<b>Elements Master File</b>” submodule.</li>
                                <li>
                                    In the Compliance Elements Master File page, select from the corresponding dropdown list the <b>Framework</b> and the <b>Chapter</b> which the Standard that you want to modify belongs to.
                                    <img class="img-responsive" src="images/compliance-master-file-selection.png" alt="selection in compliance master file screen shot">
                                </li>
                                <li>
                                    A dropdown list will appear containing a list of Standard Accounts under the selected Chapter. Select from the said dropdown list the <b>Standard</b> that you wish to modify.

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>Even if you intend to modify only a Chapter, you still need to select a Standard account from the Standard dropdown list to trigger the population and display of Chapter details.  Any standard account from the standard dropdown list will suffice.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    Selecting a Standard account will trigger the population and display the Chapter details as well as the Standard details. From the same pane, click the “<b>Modify</b>” button.
                                    <img class="img-responsive" src="images/compliance-master-file-chapter-and-standard-information.png" alt="created chapter and standard information screen shot">
                                </li>
                                <li>
                                    The “Modify Chapter/Standard” pop-up interface will appear. This contains the Chapter details as well as the list of Standards registered.
                                    <img class="img-responsive" src="images/modify-chapter-fields-locked-modal.png" alt="modifying chapter information screen shot">
                                </li>
                                <li>
                                    To <b>modify Chapter</b>, click the “<b>Update Chapter Details</b>” button then change the details of the Chapter you want to edit.  After modifying the Chapter details, press the “<b>Save Changes</b>” button.
                                    <img class="img-responsive" src="images/modify-chapter-fields-unlocked-modal.png" alt="modifying chapter information screen shot">
                                </li>
                                <li>To modify a Standard, first choose from the list the Standard that you wish to modify then press the <b>Modify</b> <i class="fa fa-edit"></i> button in the Action Column corresponding the standard you wish to modify.</li>
                                <li>
                                    A pop-up interface containing the Standard details will appear. If the Standard account has its “Locked Fields” checkbox currently checked, you need to uncheck it first before you can start changing the details. (See note about Locked Fields option in Step 9 of <a class="scrollto" href="#create-chapter-and-standard-step-10">Create Chapters & Standards</a> section)
                                    <img class="img-responsive" src="images/modify-chapter-fields-unlocked-modal.png" alt="modifying chapter information screen shot">
                                </li>
                                <li>Once done modifying the Standard field, click the check box besides the “Locked Fields” option if you want the Standard account to be protected from erroneous modification. Otherwise, leave it blank.</li>
                                <li>Afterwards, press the “<b>Save Changes</b>” button to complete the modification. You will be redirected back to the “<b>Modify Chapter/Standard</b>” interface.</li>
                                <li>If you want to modify details of another Standard account within the same Chapter, press the Modify <i class="fa fa-edit"></i> button corresponding the Standard you wish to modify and repeat steps 9 to 11 of this section.</li>
                                <li>Once done modifying Chapter and/or Standard accounts, press the “<b>Close</b>” button in the “Modify Chapter/Standard” interface to finalize the modification.</li>
                                <li>
                                    Another way of modifying a Chapter/Standard is by selecting from the corresponding dropdown list the <b>Framework</b> and the <b>Chapter</b> the Standard that you want to modify belongs to and click the “<b>Update Chapter Details</b>” button at the right side of the standard dropdown list. Then repeat steps 6 to 13.
                                    <img class="img-responsive" src="images/compliance-master-file-selection-2.png" alt="selecting chapter and standard screen shot">
                                </li>
                            </ol>
                        </section>

                        <section id="delete-chapters" class="doc-section">
                            <h4>Delete Chapters</h4>
                            <p>Only authorized users can view and delete Chapters. To delete a chapter, your user account needs to have an “Update Chapter Details” access permissions to the “Compliance Elements” Module > “<b>Elements Master File</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Elements</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Compliance Elements”. Click the “<b>Elements Master File</b>” submodule.</li>
                                <li>In the Compliance Elements Master File page, select from the corresponding dropdown list the <b>Framework</b> and the <b>Chapter</b> that you want to delete.</li>
                                <li>
                                    Click the “<b>Update Chapter Details</b>” button at the right side of the standard dropdown list.
                                    <img class="img-responsive" src="images/compliance-master-file-selection-2.png" alt="selecting chapter and standard screen shot">
                                </li>
                                <li>
                                    The “Modify Chapter/Standard” pop-up interface will appear. This contains the Chapter details, under it are buttons. Click the “Delete Chapter” button.
                                    <img class="img-responsive" src="images/create-chapter-zoom-modal.png" alt="zoom in create chapter modal screen shot">
                                </li>
                                <li>
                                    A pop-up validation message will appear confirming if you want to proceed with the deletion of the chapter or not.  Press the “<b>Yes</b>” button if you want to continue deleting the Chapter. Otherwise, press “<b>No</b>”.
                                    <img class="img-responsive" src="images/confirm-delete-chapter-modal.png" alt="confirm delete chapter action modal">
                                </li>
                            </ol>
                        </section>

                        <section id="delete-standards" class="doc-section">
                            <h4>Delete Standards</h4>
                            <p>Only authorized users can view and delete Standards. To delete a standard, your user account needs to have a “View” and “Delete” access permissions to the “Compliance Elements” Module > “<b>Elements Master File</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Elements</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Compliance Elements”. Click the “<b>Elements Master File</b>” submodule.</li>
                                <li>
                                    In the Compliance Elements Master File page, select from the corresponding dropdown list the <b>Framework</b> and the <b>Chapter</b> which the Standard that you want to delete belongs to.
                                    <img class="img-responsive" src="images/compliance-master-file-selection-2.png" alt="selecting chapter and standard screen shot">
                                </li>
                                <li>A dropdown list will appear containing a list of Standard Accounts under the selected Chapter. Select from the said dropdown list the <b>Standard</b> that you wish to delete. </li>
                                <li>
                                    Selecting a Standard account will trigger the population and display of the Chapter details as well as the Standard details. From the same pane, click the “<b>Delete</b>” button.
                                    <img class="img-responsive" src="images/create-chapter-zoom-modal.png" alt="zoom in create chapter modal screen shot">
                                </li>
                                <li>
                                    A pop-up validation message will appear confirming if you want to proceed with the deletion of the standard or not.  Press the “<b>Yes</b>” button if you want to continue deleting the Standard. Otherwise, press “<b>No</b>”.
                                    <img class="img-responsive" src="images/confirm-delete-standard-modal.png" alt="confirm delete standard action modal">
                                </li>
                                <li>
                                    If you want to delete multiple standards under the same Chapter, click the “<b>Modify</b>” button instead of the “Delete” button in Step 5 of this section. A pop-up interface will appear containing the list of Standards within that Chapter.
                                    <img class="img-responsive" src="images/create-chapter-with-standards-modal.png" alt="create chapter with standards screen shot">
                                </li>
                                <li>Press the “<b>Delete</b>” <i class="fa fa-remove"></i> button in the Action Column corresponding the standard you wish to modify.</li>
                                <li>
                                    For every standard you delete, a pop-up validation message will appear confirming if you want to proceed with the deletion of that standard or not. Press the “<b>Yes</b>” button if you want to continue deleting the Standard. Otherwise, press “<b>No</b>”.
                                    <img class="img-responsive" src="images/confirm-delete-standard-modal.png" alt="confirm delete standard action modal">
                                </li>
                            </ol>

                            <div class="callout-block callout-danger">
                                <div class="icon-holder">
                                    <i class="fa fa-exclamation-triangle"></i>
                                </div>
                                <div class="content">
                                    <h4 class="callout-title">Note:</h4>
                                    <p>Deleting a Standard Account, will also result in the deletion of the <b>Compliance Elements</b> tagged under it as well as the deletion of the <b>Evidences</b> for those Compliance Elements.  Such deletion, once confirmed, will not be recoverable.  Therefore, we suggest extra caution in performing deletions.  Aside from the Elements per Standard pane in Step 5, you can also check if there are Elements tagged under a Standard by looking at the Element Count column as depicted in the pop-up interface of Step 7.</p>
                                </div>
                            </div>
                        </section>

                        <section id="manage-compliance-elements" class="doc-section">
                            <div class="section-block">
                                <h3>Manage Compliance Elements</h3>
                                <p>Compliance Elements or Elements are the detailed requirements that needs to be met in order to comply with the Framework.  In some Framework (Standards), these are sometimes called “Controls,” or “Measurable Elements.”  As the system is mainly a platform for the submission, assessment & scoring of evidences of compliance for each Element, the proper management of Compliance Elements are critical.</p>
                            </div>
                        </section>

                        <section id="create-element" class="doc-section">
                            <h4>Create Compliance Elements</h4>
                            <p>Only authorized users can create Compliance Elements. To create a compliance elements, your user account needs to have a “View” and “Create” access permission to the “Compliance Elements” Module > “<b>Elements Master File</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Elements</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Compliance Elements”. Click the “<b>Elements Master File</b>” submodule.</li>
                                <li>
                                    In the Compliance Elements Master File page, select from the corresponding dropdown list the <b>Framework</b> and the <b>Chapter</b> to which the Standard you want your Element be to be tagged under belongs to.
                                    <img class="img-responsive" src="images/compliance-master-file-selection.png" alt="compliance master file selection screen shot">
                                </li>
                                <li>A dropdown list will appear containing a list of Standard Accounts under the selected Chapter. Select from the said dropdown list the <b>Standard</b> that from which you wish your Element to be tagged under.</li>
                                <li>
                                    Selecting a Standard account will trigger the population and display of the Chapter details as well as the Standard details.  At the bottom of the “Elements per Standard” pane, press the “<b>+Create New Element</b>” button.
                                    <img class="img-responsive" src="images/compliance-elements-empty.png" alt="compliance master file elements screen shot">
                                </li>
                                <li>
                                    A pop-up interface will appear. First, make sure that the Element account you will be creating is tagged under the correct Framework, Chapter and Standard account.  If not correctly tagged, kindly choose the appropriate Framework and Chapter account by choosing from the dropdown list corresponding to the same in the Standards Applicability section of the pop-up interface.
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Enabled Element Attributes</label>
                                            <img class="img-responsive" src="images/create-element-with-name.png" alt="create element with name modal">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Disabled Element Attributes</label>
                                            <img class="img-responsive" src="images/create-element-without-name.png" alt="create element without name modal">
                                        </div>
                                    </div>

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>You can customize “Element Attributes”. See <a class="scrollto" href="#config-basic-setup">Manage Basic Configurations: Basic Setup</a> section for more details. </p>
                                        </div>
                                    </div>

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>System will automatically capture your initial choice of Framework, Chapter and Standard that is on display before you pressed the “+Create New Element” button.  However, should you wish to tag the Element you’ll be creating to another Chapter / Standards, you can still change the values in the “Add Element” pop-up interface.</p>
                                        </div>
                                    </div>

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>For our initial deployment, we currently customized the Element naming to our Pilot Client (Hospital). In which case, for the Element Name, System currently designed to automatically take the Element Name and have it combined or connected to <Standard Name> plus “ME” (which standards for Measurable Element.  So if you put “<b>1</b>” in the Element Name under standard 1, system will displace the Element name as “Standard 1 ME 1”</p>
                                        </div>
                                    </div>
                                </li>
                                <li>Complete the Element details of the “<b>Add Element</b>” pop-up interface. We suggest that Element Name be the Element Number.</li>
                                <li>
                                    If you want to have the Element “enabled”, then click the check box besides “Enabled” option.  Otherwise, leave it blank.

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>Elements that are “enabled” will be available for evidence submissions & scoring.</p>
                                        </div>
                                    </div>
                                </li>
                                <li id="create-element-step-9">
                                    If you want the fields of the Element account to be protected from erroneous modification, then click the check box besides the “<b>Locked Fields</b>” option. Otherwise, leave it blank

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>Lock fields is an optional precautionary measure we placed in each Element account to protect the same from erroneous modification of Element details.  If an Element has “lock fields” option enabled/checked, users trying to modify the details / attributes of that particular Standard account will have to untick the Lock Fields checkbox first before the user can effect changes to the same (i.e. before user can change the Element name & details and/or enable disable the element).  This is particularly helpful in protecting the Element account from erroneous unticking of the “Enabled” option which automatically disables the same making it unavailable for evidence submission & scoring.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>Once done completing the details of the Element, press the “<b>Add</b>” button.</li>
                            </ol>
                        </section>

                        <section id="modify-element" class="doc-section">
                            <h4>Modify Compliance Elements</h4>
                            <p>Only authorized users can modify Compliance Elements. To modify a compliance elements, your user account needs to have a “View” and “Modify” access permission to the “Compliance Elements” Module > “<b>Elements Master File</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Elements</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Compliance Elements”. Click the “<b>Elements Master File</b>” submodule.</li>
                                <li>
                                    In the Compliance Elements Master File page, select from the corresponding dropdown list the <b>Framework</b> and the <b>Chapter</b> from which the Standard containing the Element you wish to modify is currently tagged under.
                                    <img class="img-responsive" src="images/compliance-master-file-selection.png" alt="compliance master file elements screen shot">
                                </li>
                                <li>A dropdown list will appear containing a list of Standard Accounts under the selected Chapter. Select from the said dropdown list the <b>Standard</b> containing the Element you wish to modify.</li>
                                <li>
                                    System will then populate the Elements tagged under the chosen Standard, if any.  From the list of Elements, press the Modify <i class="fa fa-edit"></i> button in the Action Column corresponding the Element you wish to modify.
                                    <img class="img-responsive" src="images/compliance-elements-empty.png" alt="compliance master file elements screen shot">
                                </li>
                                <li>A pop-up interface containing the Element details will appear. If the Element account has its “Locked Fields” checkbox currently checked, you need to uncheck it first before you can start changing the details. (See note about Locked Fields option in Step 9 of <a class="scrollto" href="#create-element-step-9">Create Compliance Elements</a> section)</li>
                                <li>Once done modifying the Element fields, click the check box besides the “Locked Fields” option if you want the Standard account to be protected from erroneous modification. Otherwise, leave it blank.</li>
                                <li>Afterwards, press the “<b>Save Changes</b>” button to complete the modification.</li>
                            </ol>
                        </section>

                        <section id="delete-element" class="doc-section">
                            <h4>Delete Compliance Elements</h4>
                            <p>Only authorized users can delete Compliance Elements. To modify a compliance elements, your user account needs to have a “View” and “Delete” access permission to the “Compliance Elements” Module > “<b>Elements Master File</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Elements</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Compliance Elements”. Click the “<b>Elements Master File</b>” submodule</li>
                                <li>
                                    In the Compliance Elements Master File page, select from the corresponding dropdown list the <b>Framework</b> and the <b>Chapter</b> from which the Standard containing the Element you wish to delete is currently tagged under.
                                    <img class="img-responsive" src="images/compliance-master-file-selection.png" alt="compliance master file elements screen shot">
                                </li>
                                <li>A dropdown list will appear containing a list of Standard Accounts under the selected Chapter. Select from the said dropdown list the <b>Standard</b> containing the Element you wish to delete.</li>
                                <li>System will then populate the Elements tagged under the chosen Standard, if any.  From the list of Elements, press the <b>Delete</b> <i class="fa fa-remove"></i> button in the Action Column corresponding the Element you wish to delete.</li>
                                <li>
                                    A pop-up validation message will appear confirming if you want to proceed with the deletion or not.  Press the “<b>Yes</b>” button if you want to continue deleting the Standard.  Otherwise, press “<b>No</b>”.
                                    <img class="img-responsive" src="images/confirm-delete-element.png" alt="confirm element deletion modal">
                                </li>
                                <li>Repeat steps 5 and 6 if you want to delete more</li>
                            </ol>
                        </section>

                        <section id="view-element" class="doc-section">
                            <h4>Viewing Compliance Elements</h4>
                            <p>Only authorized users can delete Compliance Elements. To modify a compliance elements, your user account needs to have a “View” access permission to the “Compliance Elements” Module > “<b>Elements Master File</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Elements</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Compliance Elements”. Click the “<b>Elements Master File</b>” submodule.</li>
                                <li>
                                    In the Compliance Elements Master File page, select from the corresponding dropdown list the <b>Framework</b> and the <b>Chapter</b> from which the Standard containing the Element you wish to delete is currently tagged under.
                                    <img class="img-responsive" src="images/compliance-master-file-selection.png" alt="compliance master file elements screen shot">
                                </li>
                                <li>A dropdown list will appear containing a list of Standard Accounts under the selected Chapter. Select from the said dropdown list the <b>Standard</b> containing the Element you wish to view.</li>
                                <li>System will then populate the Elements tagged under the chosen Standard, if any. From the list of Elements, press the <b>View</b> <i class="fa fa-search"></i> button in the Action Column corresponding the Element you wish to view.</li>
                                <li>
                                    The details of selected Compliance Elements is shown from the captured Framework, Chapter and Standard. You can see also the Element name (if enabled on <b>Admin Module</b>), Element Description, assigned weight for Scoring, if Enabled and Lock Fields are ticked or not.

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>This is module is for viewing only, if you want to modify the element, click modify button above the list of Elements.</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </section>

                        <section id="enable-element" class="doc-section">
                            <h4>Enable/Disable Compliance Elements</h4>
                            <p>Only authorized users can <b>Enable/Disable</b> Compliance Elements. To Enable/Disable a compliance elements, your user account needs to have a “View”, “Create” and “Modify” access permission to the “Compliance Elements” Module > “<b>Elements Master File</b>” Submodule.</p>

                            <div class="callout-block callout-info">
                                <div class="icon-holder">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="content">
                                    <h4 class="callout-title">Note:</h4>
                                    <p>There are two ways on enabling/disabling of elements. First is by creating compliance element. Second is by modifying elements.</p>
                                </div>
                            </div>

                            <ol class="list">
                                <li>Click the “<b>Compliance Elements</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Compliance Elements”. Click the “<b>Elements Master File</b>” submodule.</li>
                                <li>
                                    First Way – by Creation of Element
                                    In the Compliance Elements Master File page, select from the corresponding dropdown list the <b>Framework</b> and the <b>Chapter</b> which the Standard will contain the Element you want to create currently tagged under. On creation of Element, you can now Enable/Disable the Element.
                                    <img class="img-responsive" src="images/create-element-with-name.png" alt="create element modal">

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>Enabling/Disabling of Element affects the scoring of the compliance. Disabled Elements are not counted upon gathering of scores</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    Second Way – by Modifying of Element
                                    In the Compliance Elements Master File page, select from the corresponding dropdown list the <b>Framework</b> and the <b>Chapter</b> from which the Standard containing the Element you wish to modify is currently tagged under. On modifying of Element, you can now Enable/Disable the Element.
                                    <img class="img-responsive" src="images/create-element-with-name.png" alt="create element modal">
                                </li>
                            </ol>
                        </section>

                        <section id="generate-element" class="doc-section">
                            <h4>Generate List of Compliance Elements</h4>
                            <p>Only authorized users can <b>Generate List</b> of Compliance Elements. To Generate List of a compliance elements, your user account needs to have a “View” access permission to the “Compliance Elements” Module > “<b>Compliance Mapping</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Elements</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Compliance Elements”. Click the “<b>Compliance Mapping</b>” submodule.</li>
                                <li>In the Compliance Elements Master File page, select from the corresponding dropdown list the <b>Framework</b> and the <b>Chapter</b> from which the Standard containing the Element you wish to Generate is currently tagged under.</li>
                                <li>
                                    You can select a specific compliance element by ticking the checkbox on the left side aligned on the element or select all the compliance elements you want to generate by ticking the check box on the left side aligned on the chapter code label.
                                    <ol type="a">
                                        <li>
                                            Select a specific element
                                            <img class="img-responsive" src="images/select-element-manual.png" alt="Selecting elements one by one">
                                        </li>
                                        <li>
                                            Selecting all elements under selected standard
                                            <img class="img-responsive" src="images/select-element-all.png" alt="Selecting all elements">
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                            <p>Example of Generated List of Compliance Elements</p>
                            <img class="img-responsive" src="images/sample-generated-compliance.png" alt="Sample generated compliance elements">
                        </section>

                        <section id="submission-and-scoring" class="doc-section">
                            <h2 class="section-title">Submission and Scoring of Evidences</h2>
                            <div class="section-block">
                                <p><b>TRUESIGHT</b>’s one main function is the submission and scoring of evidences done by the authorized person.</p>
                                <h3 id="submit-manage-compliance">Submit and Manage Evidence of Compliance</h3>
                            </div>
                        </section>

                        <section id="submit-evidence-compliance" class="doc-section">
                            <h4>Create and Submit Evidence of Compliance</h4>
                            <p>Authorized person must create and submit evidence in order to comply, it will be review by the Compliance Officer/Auditor and will be scored accordingly. To <b>Create and Submit Evidence</b>, the user account must have a created framework, standards and elements. And can access the “<b>Compliance Check</b>” Module > “<b>Evidence Submission</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Check</b>” module</li>
                                <li>A Submodule list will appear under “Compliance Check”. Click the “<b>Evidence Submission</b>” submodule.</li>
                                <li>
                                    In the Compliance Check Page, select from the corresponding dropdown list of the <b>Framework</b>, <b>Chapter</b>, <b>Site</b>, <b>Standard</b> and the Department you wish to tag for the submission of evidence. And then Click “<b>Check Evidence Status</b>” button.

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>For each element that does not yet scored, a “no evidence” icon status displayed. After submitting an evidence, the icon status will change. Evidence can submit as for review, as open and for CAR.</p>
                                        </div>
                                    </div>

                                    <img class="img-responsive" src="images/evidence-table-list.png" alt="List of evidences in a table">
                                </li>
                                <li>
                                    Click “<b>Submit Evidence</b>” <i class="fa fa-file-text-o"></i> on the right side of the status icon. A pop up page will appear for the assessment of the evidence which will be submitted.
                                    <img class="img-responsive" src="images/submit-evidence-modal.png" alt="Submit evidence modal">
                                </li>
                                <li>Click “<b>Submit for Review</b>” and automatically the evidence submitted will go to the “<b>Evidence for Review</b>” submodule pending for the assessment of Compliance Officer.</li>
                            </ol>
                        </section>

                        <section id="attach-documents-evidence" class="doc-section">
                            <h4>Attach Documents or Media to Evidence</h4>
                            <p>Authorized person must create and submit evidence in order to comply, it will be review by the Compliance Officer/Auditor and will be scored accordingly. To <b>Attach Documents or Media to Evidence</b>, the user account must have a created framework, standards and elements. And can access the “<b>Compliance Check</b>” Module > “<b>Evidence Submission</b>” Submodule</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Check</b>” module</li>
                                <li>A Submodule list will appear under “Compliance Check”. Click the “<b>Evidence Submission</b>” submodule.</li>
                                <li>
                                    In the Compliance Check Page, select from the corresponding dropdown list of the <b>Framework</b>, <b>Chapter</b>, <b>Site</b>, <b>Standard</b> and the <b>Department</b> you wish to tag for the submission of evidence. And then Click “<b>Check Evidence Status</b>” button.

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>In submitting evidence, you can attach files for supporting documents and add a comment corresponds to the evidence you’ve submitted. The Auditor/Compliance Officer will assess the evidence and will give a score.</p>
                                        </div>
                                    </div>

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>You may attach different types of files such as docx, xlsx, mp3, jpeg, png, pptx and even mp4.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>Click “<b>Choose File</b>” and select the files you wish to attach.</li>
                                <li>You may review your attachment before submitting by clicking the file name of your attachment (preview if your attachment is a photo).</li>
                            </ol>
                        </section>

                        <section id="tag-multiple-location" class="doc-section">
                            <h4>Tag/Untagged Multiple Sites/Departments</h4>
                            <p>Authorized person must create and submit evidence in order to comply, it will be review by the Compliance Officer/Auditor and will be scored accordingly. To <b>Tag/Untagged Multiple Sites/Departments</b>, the user account must have a created framework, standards and elements. And can access the “<b>Compliance Check</b>” Module > “<b>Evidence Submission</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Check</b>” module</li>
                                <li>A Submodule list will appear under “Compliance Check”. Click the “<b>Evidence Submission</b>” submodule.</li>
                                <li>In the Compliance Check Page, select from the corresponding dropdown list of the <b>Framework</b>, <b>Chapter</b>, <b>Site</b>, <b>Standard</b> and the <b>Department</b> you wish to tag for the submission of evidence. And then Click “<b>Check Evidence Status</b>” button.</li>
                                <li>
                                    Click “Submit Evidence” <i class="fa fa-file-text-o"></i> at the right side.
                                    <img class="img-responsive" src="images/evidence-table-list.png" alt="List of evidences in a table">

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>After you click submit evidence button, the first department you’ve tag was automatically captured on the pop up page</p>
                                        </div>
                                    </div>

                                    <img class="img-responsive" src="images/tagging-department-submit-evidence.png" alt="Selecting department">

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>You may tag multiple departments for one evidence as well.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>Attach File and Click “<b>Submit for Review</b>”.</li>
                            </ol>
                        </section>

                        <section id="modify-evidence-compliance" class="doc-section">
                            <h4>Modifying Evidence of Compliance</h4>
                            <p>Authorized person must create and submit evidence in order to comply, it will be reviewed by the Compliance Officer/Auditor and will be scored accordingly. To <b>Modify Evidence of Compliance</b>, the user account must have a created framework, standards and elements. And can access the “<b>Compliance Check</b>” Module > “<b>Evidence Submission</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Check</b>” module</li>
                                <li>A Submodule list will appear under “Compliance Check”. Click the “<b>Evidence Submission</b>” submodule.</li>
                                <li>
                                    In the Compliance Check Page, select from the corresponding dropdown list of the <b>Framework</b>, <b>Chapter</b>, <b>Site</b>, <b>Standard</b> and the <b>Department</b> you wish to tag for the submission of evidence. And then Click “<b>Check Evidence Status</b>” button.

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>You can only modify evidence if there is an existing evidence submitted.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    Click “<b>Modify</b>“ <i class="fa fa-edit"></i> button in the Action Column corresponding the Element you wish to Modify
                                    <img class="img-responsive" src="images/modify-evidence-modal.png" alt="Modify evidence modal">
                                </li>
                                <li>You can attach new file and add new comment when modifying Elements. And the date of modification captured. Click “<b>Submit for Review</b>”.</li>
                            </ol>
                        </section>

                        <section id="delete-evidence-compliance" class="doc-section">
                            <h4>Delete Evidence of Compliance</h4>
                            <p>Authorized person must create and submit evidence in order to comply, it will be review by the Compliance Officer/Auditor and will be scored accordingly. To <b>Delete Evidence of Compliance</b>, the user account must have a created framework, standards and elements. Had a submitted evidence. And can access the “<b>Compliance Check</b>” Module > “<b>Evidence Submission</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Check</b>” module</li>
                                <li>A Submodule list will appear under “Compliance Check”. Click the “<b>Evidence Submission</b>” submodule.</li>
                                <li>
                                    In the Compliance Check Page, select from the corresponding dropdown list of the <b>Framework</b>, <b>Chapter</b>, <b>Site</b>, <b>Standard</b> and the <b>Department</b> you wish to tag for the submission of evidence. And then Click “<b>Check Evidence Status</b>” button.
                                    <img class="img-responsive" src="images/evidence-submission-for-reviews-table-list.png" alt="List of evidences in a table">
                                </li>
                                <li>Click “<b>Delete</b>“ <i class="fa fa-remove"></i> button in the Action Column corresponding the Element you wish to Delete.</li>
                                <li>
                                    A pop-up validation message will appear confirming if you want to proceed with the deletion of the evidence or not.  Press the “<b>Yes</b>” button if you want to continue deleting the Evidence. Otherwise, press “<b>No</b>”.

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>Deleted evidence will be directly go to the “Historical Records” module and can be resubmitted again for compliance purposes.</p>
                                        </div>
                                    </div>

                                    <img class="img-responsive" src="images/confirm-delete-evidence.png" alt="Confirm evidence deletion">
                                </li>
                            </ol>
                        </section>

                        <section id="score-compliance-element" class="doc-section">
                            <div class="section-block">
                                <h3>Score Compliance to Elements Through Checklist</h3>
                            </div>
                        </section>

                        <section id="navigate-checklist" class="doc-section">
                            <h4>Navigate through the Checklist</h4>
                            <p>One of the Checklist Scoring feature is the pagination tab located at the right end of the interface. This feature can help an authorized user to easily navigate to the next page of elements that needs to be scored.</p>
                            <img class="img-responsive" src="images/checklist-index.png" alt="checklist screen shot">
                        </section>

                        <section id="scoring-checklist" class="doc-section">
                            <h4>Score Compliance to Elements through Checklist</h4>
                            <p>In this module, authorized users can Score Compliance Elements. To Score a compliance elements through checklist, your user account must have an access permission to the “<b>Compliance Checklist</b>” Module > “<b>Checklist Scoring</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click “<b>Compliance Check</b>” module.</li>
                                <li>A Submodule list will appear under “Compliance Check”. Click the “<b>Checklist Scoring</b>” submodule.</li>
                                <li>
                                    In the Checklist Scoring Page, select from the corresponding dropdown list of the <b>Framework</b>, <b>Chapter</b>, <b>Standard</b>, <b>Site</b> and the <b>Department</b> you wish to tag for the scoring of elements. And then the page will automatically show the elements checklist.
                                    <img class="img-responsive" src="images/checklist-index.png" alt="checklist screen shot">

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>If an element does not yet scored, there is a no evidence icon.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    You can choose a desire score for each elements, it’s either a “<b>Pass</b>, <b>Partial</b>, <b>Fail</b> or <b>N/A</b>”. Tick the button under a score. Then Click “<b>Save Checklist</b>”.

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>Every time you made a score, you must save it first before navigating to the next page.</p>
                                        </div>
                                    </div>

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>A pop up assessment page will appear if you choose the partial and fail score. The authorized person will assess the score by adding an attachment and comment. Click “Submit” and “Save”.</p>
                                        </div>
                                    </div>

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>You may view the details of elements, or you may reset the scored by clicking the action button on the right side <i class="fa fa-search"></i> for viewing and <i class="fa fa-refresh"></i> for resetting score.</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </section>

                        <section id="manage-location-applicability" class="doc-section">
                            <h4>Manage Location Applicability</h4>
                            <p>In this module, an authorized user can manage the location applicable to a certain User. See <a class="scrollto" id="#create-user">MANAGE USER ACCOUNTS: Create a User</a> section for more details.</p>
                        </section>

                        <section id="understanding-element-status" class="doc-section">
                            <h4>Understanding Element Status</h4>
                            <p>In this module, every time an authorized user submit a score, a status legend will appear on the Status Column to help the user determine the status of each elements easily.</p>
                            <img class="img-responsive" src="images/view-evidence-status-modal.png" alt="modal containing list of evidences status">
                        </section>

                        <section id="add-comments-attachments" class="doc-section">
                            <h4>Add Comments and Attachments</h4>
                            <p>In this module, authorized users can Add Comment and Attachment. In able to do it, your user account must have an access permission to the “<b>Compliance Checklist</b>” Module > “<b>Checklist Scoring</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click “<b>Compliance Check</b>” module.</li>
                                <li>A Submodule list will appear under “Compliance Check”. Click the “<b>Checklist Scoring</b>” submodule.</li>
                                <li>In the Compliance Check Page, select from the corresponding dropdown list of the <b>Framework</b>, <b>Chapter</b>, <b>Site</b>, <b>Standard</b> and the <b>Department</b> you wish to tag for the scoring of elements. And then the page will automatically show the elements checklist.</li>
                                <li>
                                    Just what mention earlier, only “<b>Partial and Fail</b>” scores has the assessment pop up page where you can attach and add comment.
                                    <img class="img-responsive" src="images/assess-evidence-modal.png" alt="assessing evidence">

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>Just like the evidence submission, you can attach different types of files such as docx, xlsx, mp3, jpeg, png, pptx and even mp4.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>Click “<b>Save Assesment</b>”.</li>
                            </ol>
                        </section>

                        <section id="review-score-evidence" class="doc-section">
                            <div class="section-block">
                                <h3>Review & Score Submitted Evidence</h3>
                            </div>
                        </section>

                        <section id="navigate-submitted-evidences" class="doc-section">
                            <h4>Navigate through Submitted Evidences</h4>
                            <p>In this module, an authorized user can review the elements with evidences submitted by the departments. There’s an Evidence for Review pane that shows all the pending elements with evidences that needs reviewing.</p>
                        </section>

                        <section id="review-score-evidences" class="doc-section">
                            <h4>Review and Score Submitted Evidences</h4>
                            <p>In this module, authorized users can know the Compliance Element submitted evidences that needs to review. To Review a submitted evidence, your user account must have an access permission to the “<b>Compliance Check</b>” Module > “<b>For Review</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click “<b>Compliance Check</b>” module.</li>
                                <li>A Submodule list will appear under “Compliance Check”. Click the “<b>For Review</b>” submodule.</li>
                                <li>In the For Review Page, select from the corresponding dropdown list of the <b>Framework</b>, <b>Chapter</b>, <b>Standard</b>, <b>Site</b> and the <b>Department</b> you wish to tag for the reviewing of elements. After selecting, click the “<b>Check Evidence Status</b>” button and the page will automatically show the evidence for review.</li>
                                <li>In the Evidence for Review pane, press the <b>Assess Evidence</b> button in the Action Column corresponding the standard you wish to assess.</li>
                                <li>A Submit Evidence pop-up interface containing the Evidence details will appear. In the Evidence Assessment pane, you can submit a final compliance score (Pass, Partial Score, Fail, Not Applicable).</li>
                                <li>Once done assessing an evidence press the “<b>Save Assessment</b>” button.</li>
                            </ol>
                        </section>

                        <section id="review-tag-location" class="doc-section">
                            <h4>Tag/Untagged Multiple Sites/Department</h4>
                            <p>In this module, authorized users can Tag/Untagged Multiple Sites/Department. In able to do it, your user account must have an access permission to the “<b>Compliance Checklist</b>” Module > “<b>Checklist Scoring</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click “<b>Compliance Check</b>” module.</li>
                                <li>A Submodule list will appear under “Compliance Check”. Click the “<b>Checklist Scoring</b>” submodule.</li>
                                <li>In the Compliance Check Page, select from the corresponding dropdown list of the <b>Framework</b>, <b>Chapter</b>, <b>Standard</b>, <b>Site</b> and the <b>Department</b> you wish to tag for the reviewing of elements. After selecting, click the “<b>Check Evidence Status</b>” button and the page will automatically show the evidence for review.</li>
                                <li>
                                    You can only tag multiple sites/department if there are other site created on the location account module in admin and other departments created under framework account also in admin.
                                    <img class="img-responsive" src="images/checklist-scoring-tagging-department.png" alt="tagging department in checklist scoring">
                                </li>
                            </ol>
                        </section>

                        <section id="generate-status-section" class="doc-section">
                            <div class="section-block">
                                <h3>Generate Status of each Measurable Elements</h3>
                            </div>
                        </section>

                        <section id="generate-status" class="doc-section">
                            <h4>Generate Status of Each Measurable Elements</h4>
                            <p>Only authorized users can Generate Report of Status of Compliance. To <b>Generate Report</b> of the status of each elements, your user account needs to have access permission to the “Compliance Check” Module > “<b>Status of Compliance</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Check</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Compliance Check”. Click the “<b>Status of Compliance</b>” submodule.</li>
                                <li>In the Status of Compliance page, select from the corresponding dropdown list the <b>Framework</b>, <b>Chapter</b>, <b>Standard</b>, <b>Site</b> and the <b>Department</b> you wish to Generate.</li>
                                <li>In the Evidence pane, you can still select the specific Status of Evidence (ALL, Pass, Partial Score, Fail, Not Applicable) you want to Generate.</li>
                                <li>After selecting, click the “<b>Generate Report</b>” at the bottom of the page.</li>
                            </ol>
                            <p>Example of Generated Report of Status of Compliance</p>
                            <img class="img-responsive" src="images/sample-generated-status.png" alt="screen shot of sample generated status">

                            <div class="callout-block callout-info">
                                <div class="icon-holder">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="content">
                                    <h4 class="callout-title">Note:</h4>
                                    <p>A generated report is in excel format.</p>
                                </div>
                            </div>
                        </section>

                        <section id="corrective-action-preventive-action" class="doc-section">
                            <h2 class="section-title">Corrective Action / Preventive Action</h2>
                            <div class="section-block">
                                <p><b>TRUESIGHT</b>’s one main function is the submission and scoring of evidences done by the authorized person</p>
                                <h3 id="capa-reports">CAPA Reports</h3>
                            </div>
                        </section>

                        <section id="navigate-capa" class="doc-section">
                            <h4>Navigate through CAPA Reports</h4>
                            <p>Only authorized users can manage Corrective Action / Preventive Action Reports. To manage the CAPA Reports, your user account needs to have access permission to the “<b>Corrective Action</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Corrective Action</b>” module in the Menu.</li>
                                <li>In the Corrective Action page, select from the corresponding dropdown list the <b>Site</b> and the <b>Department</b> you wish to generate.</li>
                                <li>In the List of Corrective Action Reports pane, you can still filter the specific incident reports by selecting its Column and Values you want to generate. </li>
                                <li>
                                    After selecting, click the “<b>Filter</b>” button.
                                    <img class="img-responsive" src="images/corrective-index.png" alt="screen shot of Corrective Reports page">

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>You may download, view, modify and delete the details of a corrective action by clicking the action button on the right side <i class="fa  fa-file-pdf-o"></i> for downloading a pdf file, <i class="fa fa-search"></i> for viewing, <i class="fa fa-edit"></i> for modifying and <i class="fa fa-remove"></i> for deleting.</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </section>

                        <section id="create-capa" class="doc-section">
                            <h4>Create a Corrective Action</h4>
                            <p>Only authorized users can create a Corrective Action / Preventive Action Report. To create a CAPA Report, your user account needs to have access permission to the “<b>Corrective Action</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Corrective Action</b>” module in the Menu.</li>
                                <li>In the Corrective Action page, select from the corresponding dropdown list the <b>Site</b> and the <b>Department</b> you wish to generate.</li>
                                <li>After selecting, click the “<b>+ New CAPA</b>” button.</li>
                                <li>
                                    You will be directed to the New Action Report page. In this page, there are three tabs (<b>Report Details</b>, <b>Investigation Details</b> and <b>Action Details</b>) that can help you in creating a detailed report.
                                    <img class="img-responsive" src="images/corrective-create-index.png" alt="screen shot of Corrective Reports Create page">
                                </li>
                            </ol>
                        </section>

                        <section id="capa-report-tab" class="doc-section">
                            <h5>Report Details Tab</h5>
                            <p>In this tab, you can input all the details of your complaints or incident reports.</p>
                            <img class="img-responsive" src="images/corrective-report-tab.png" alt="screen shot of Reports Details tab">
                            <ol class="list">
                                <li>Select from the corresponding dropdown list the <b>Category</b> and <b>Type</b> of the report you want to create.</li>
                                <li>Input the <b>Report Title</b>.</li>
                                <li>Click the “<b>Add Element</b>” button if you want to add an element.</li>
                                <li>
                                    An Add Compliance Element pop up interface will appear.
                                    <img class="img-responsive" src="images/capa-add-element.png" alt="corrective add element modal">
                                </li>
                                <li>Once done selecting the element you want, click the “<b>Add Button</b>”.</li>
                                <li>
                                    After adding an element, you will be redirected back to the Report Details tab with the element you have been added.
                                    <img class="img-responsive" src="images/corrective-report-tab-with-element.png" alt="element added">
                                </li>
                                <li>If you want to add more elements, repeat steps 3 to 5.</li>
                                <li>Once done, go to “<b>Investigation Details</b>” tab.</li>
                            </ol>
                        </section>

                        <section id="capa-investigation-tab" class="doc-section">
                            <h5>Investigation Details Tab</h5>
                            <p>In this tab, you can input all the details of the evidences.</p>
                            <img class="img-responsive" src="images/corrective-investigation-tab.png" alt="screen shot of Investigation tab">
                            <ol class="list">
                                <li>Tag all the <b>Root Cause Category</b> involved in the report you’re creating.</li>
                                <li>Input the <b>Root Cause Details</b> and <b>Impact of Issues</b>.</li>
                                <li>Select from the corresponding dropdown list the <b>Criticality</b> and <b>Urgency</b> of the report you want to create.</li>
                                <li>You can also <b>Attach a File</b> that can serves as an evidences.</li>
                                <li>Select from the corresponding dropdown list the <b>Site</b> and the <b>Department</b> you wish to tag for the report details.</li>
                                <li>Once done, go to “<b>Action Details</b>” tab.</li>
                            </ol>
                        </section>

                        <section id="capa-action-tab" class="doc-section">
                            <h5>Action Details Tab</h5>
                            <p>In this tab, you can input all the details of the action plans. </p>
                            <img class="img-responsive" src="images/corrective-action-tab.png" alt="screen shot of Action tab">
                            <ol class="list">
                                <li>Click the “<b>Add Task</b>” button.</li>
                                <li>
                                    A Create New Task pop up interface will appear.
                                    <img class="img-responsive" src="images/create-task-modal.png" alt="create task modal">
                                </li>
                                <li>Click the “<b>Create</b>” button once you’re done creating a task.</li>
                                <li>Complete the needed fields.</li>
                                <li>Once done, Click “<b>Submit</b>” or “<b>Save as Draft</b>” to finalize creating a corrective action.</li>
                                <li>Select from the corresponding dropdown list the <b>Site</b> and the <b>Department</b> you wish to tag for the report details.</li>
                                <li>Once done, go to “<b>Action Details</b>” tab.</li>
                            </ol>
                            <label for="">Disabled CAPA Module > Creation of CAPA Reports</label>
                            <img class="img-responsive" src="images/capa-disabled-workflow.png" alt="capa disabled workflow">
                            <label for="">Enabled CAPA Module > Creation of CAPA Reports</label>
                            <img class="img-responsive" src="images/capa-enabled-workflow.png" alt="capa enabled workflow">

                            <div class="callout-block callout-info">
                                <div class="icon-holder">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="content">
                                    <h4 class="callout-title">Note:</h4>
                                    <p>You can customize “Workflow Approval”. You can enable or disable the “CAPA Module > Creation of CAPA Reports”. See <a class="scrollto" href="#config-basic-setup">Manage Basic Configurations: Basic Setup</a> section for more details.</p>
                                </div>
                            </div>
                        </section>

                        <section id="compliance-summary" class="doc-section">
                            <h2 class="section-title">Summary of Compliance</h2>
                            <div class="section-block">
                                <h3 id="compliance-status">Status of Compliance</h3>
                            </div>
                        </section>

                        <section id="navigate-compliance-status-per-site" class="doc-section">
                            <h4>Navigate through Compliance Status per Site</h4>
                            <p>In this module, authorized users can view the Summary of Compliance. To view the percentage of Compliance per Site, your user account needs to have access permission to the “<b>Compliance Summary</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Summary</b>” module in the Menu.</li>
                                <li>In the Compliance Summary page, select from the corresponding dropdown list the <b>Framework</b> you want to view.</li>
                                <li>After selecting a framework, click the “<b>Compliance per Site</b>” tab. You can see already the percentage of compliance – comparative per site. </li>
                                <li>
                                    You can also select a specific status and site and monitor it through the graphs.
                                    <img class="img-responsive" src="images/summary-status-per-site-heatmap.png" alt="screen shot of Compliance Status Per Site Heatmap">
                                    <img class="img-responsive" src="images/summary-status-per-site-bar-graph.png" alt="screen shot of Compliance Status Per Site Bar Graph">
                                </li>
                            </ol>
                        </section>

                        <section id="navigate-historical-status-per-site" class="doc-section">
                            <h4>Navigate through Historical Status per Site</h4>
                            <p>In this module, authorized users can view the Summary of Compliance. To compare the progress of Compliance per Site, your user account needs to have access permission to the “<b>Compliance Summary</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Summary</b>” module in the Menu.</li>
                                <li>In the Compliance Summary page, select from the corresponding dropdown list the <b>Framework</b> you want to view.</li>
                                <li>After selecting a framework, click the “<b>Historical per Site</b>” tab. </li>
                                <li>
                                    Select from the corresponding dropdown list a “Comparative Period”, the period you want to compare. Then, you can already monitor the progress of compliance
                                    <img class="img-responsive" src="images/summary-historical-per-site.png" alt="screen shot of Historical Per Site">
                                </li>
                            </ol>
                        </section>

                        <section id="navigate-compliance-status-per-department" class="doc-section">
                            <h4>Navigate through Compliance Status per Department</h4>
                            <p>In this module, authorized users can view the Summary of Compliance. To view the percentage of Compliance per Site, your user account needs to have access permission to the “<b>Compliance Summary</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Summary</b>” module in the Menu.</li>
                                <li>In the Compliance Summary page, select from the corresponding dropdown list the <b>Framework</b> you want to view.</li>
                                <li>After selecting a framework, click the “<b>Compliance per Department</b>” tab. You can see already the percentage of compliance – comparative per site. </li>
                                <li>
                                    You can also select a specific status and site and monitor it through the graphs.
                                    <img class="img-responsive" src="images/summary-status-per-department-heatmap.png" alt="screen shot of Compliance Per Department Heatmap">
                                    <img class="img-responsive" src="images/summary-status-per-department-bar-graph.png" alt="screen shot of Compliance Per Department Bar Graph">
                                </li>
                            </ol>

                            <div class="callout-block callout-info">
                                <div class="icon-holder">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <div class="content">
                                    <h4 class="callout-title">Note:</h4>
                                    <p>You can also view the Detailed Status per Site.</p>
                                </div>
                            </div>

                            <img class="img-responsive" src="images/summary-detailed-status-modal.png" alt="detailed status modal">
                        </section>

                        <section id="navigate-historical-status-per-department" class="doc-section">
                            <h4>Navigate through Historical Status per Department</h4>
                            <p>In this module, authorized users can view the Summary of Compliance. To compare the progress of Compliance per Site, your user account needs to have access permission to the “<b>Compliance Summary</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Compliance Summary</b>” module in the Menu.</li>
                                <li>In the Compliance Summary page, select from the corresponding dropdown list the <b>Framework</b> you want to view.</li>
                                <li>After selecting a framework, click the “<b>Historical per Department</b>” tab.</li>
                                <li>
                                    Select from the corresponding dropdown list the Site and Comparative Period, you want to compare. Then, you can already monitor the progress of compliance.
                                    <img class="img-responsive" src="images/summary-historical-per-department.png" alt="screen shot of Historical Per Department Tab">
                                </li>
                            </ol>
                        </section>

                        <section id="historical-records" class="doc-section">
                            <h2 class="section-title">Historical Records</h2>
                            <div class="section-block">
                                <h3 id="historical-records-navigate">Navigate Through Historical Records</h3>
                            </div>
                        </section>

                        <section id="navigate-historical-records" class="doc-section">
                            <h4>Navigate through Historical Records</h4>
                            <p>In this module, authorized users can view the History of deleted evidence Records. To view the Historical Records, your user account needs to have access permission to the “<b>Historical Records</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Historical Records</b>” module in the Menu.</li>
                                <li>In the Historical Records page, select from the corresponding dropdown list the <b>Framework</b>, <b>Chapter</b>, <b>Standard</b>, <b>Site</b> and <b>Department</b> you want to view.</li>
                                <li>You can already see the list of Evidences you deleted before.</li>
                                <li>If you want to see more details about an evidence, in the Evidences Pane, click the “<b>View Evidence Details</b>” button located in the Action Column.</li>
                                <li>A View Evidence pop-up interface will appear. From there, you can view the evidence details, information and history.</li>
                                <li>
                                    You can also resubmit an evidence by clicking “Resubmit Evidence” button located in Action Column. A warning pop-up interface will appear confirming if you really want to resubmit an evidence.
                                    <img class="img-responsive" src="images/historical-records-index.png" alt="screen shot of Historical Records Page">
                                </li>
                            </ol>
                        </section>

                        <section id="admin-configurations" class="doc-section">
                            <h2 class="section-title">Admin Configurations</h2>
                            <div class="section-block">
                                <h3 id="manage-basic-config">Manage Basic Configurations</h3>
                            </div>
                        </section>

                        <section id="navigate-basic-config" class="doc-section">
                            <h4>Navigate through Basic Configurations</h4>
                            <p>In this module, authorized users can manage Basic Setup. To manage the Basic Configuration, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Basic Configurations</b>” submodule.</li>
                                <li>In the Basic Configurations page, select from the corresponding tab <b>Basic Setup</b>, <b>Email Notification</b> and <b>Personalize</b> you want to configure.</li>
                                <li>
                                    Every time you make a changes, don’t forget to always click the “<b>Save Changes</b>” button.
                                    <img class="img-responsive" src="images/basic-config-index.png" alt="screen shot of Basic Config Page">
                                </li>
                            </ol>
                        </section>

                        <section id="config-basic-setup" class="doc-section">
                            <h4>Basic Setup</h4>
                            <p>The Basic Setup tab module has four components: (1) <b><a class="scrollto" href="#config-basic-setup-standards-attributes-pane">Standard Attributes</a></b> pane, (2) <b><a class="scrollto" href="#config-basic-setup-elements-attributes-pane">Elements Attributes</a></b> pane, (3) <b><a class="scrollto" href="#config-basic-setup-elements-scoring-pane">Elements Scoring</a></b> and (4) <b><a class="scrollto" href="#config-basic-setup-workflow-approval-pane">Workflow Approval</a></b> pane.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Basic Configurations</b>” submodule.</li>
                                <li>In the Basic Configurations page, select from the corresponding tab <b>Basic Setup</b>, <b>Email Notification</b> and <b>Personalize</b> you want to configure.</li>
                                <li>
                                    Every time you make a changes, don’t forget to always click the “<b>Save Changes</b>” button.
                                    <img class="img-responsive" src="images/basic-config-index.png" alt="screen shot of Basic Config Page">
                                </li>
                            </ol>
                        </section>

                        <section id="config-basic-setup-standards-attributes-pane" class="doc-section">
                            <h5>Standard Attributes Pane</h5>
                            <p>This configuration is for the creation of a Standard. If you click the checkbox besides “Enable Standard Title Field” option, the details of standard will add a “Standard Name”. If you disabled the attributes, the details of standard will hide the standard name. See <a class="scrollto" href="#create-chapters-standards-compliance">Create Chapters & Standards</a> section for more details.</p>
                            <img class="img-responsive" src="images/basic-config-basic-setup.png" alt="screen shot of Basic Setup tab">
                        </section>

                        <section id="config-basic-setup-elements-attributes-pane" class="doc-section">
                            <h5>Elements Attributes Pane</h5>
                            <p>This configuration is for assigning a unique weight for each element and enabling a title field. If you want to configure a highest possible weight, click the checkbox besides “Enable Assignment of Unique Weight for Each Element” option then select the number you want from the dropdown list. If you disabled the attributes, the weight for all elements will be defaulted. See <a class="scrollto" href="#create-element">Create Compliance Elements</a> section for more details.</p>
                            <p>And if you click the checkbox besides “Enable Element Title Field” option, the details of an element will add an “Element Name”. If you disabled the attributes, the details of an element will hide the element name. See <a class="scrollto" href="#create-chapters-standards-compliance">Create Chapters & Standards</a> section for more details.</p>
                            <img class="img-responsive" src="images/basic-config-basic-setup-element-attributes.png" alt="screen shot of Element Attributes Pane">
                        </section>

                        <section id="config-basic-setup-elements-scoring-pane" class="doc-section">
                            <h5>Elements Scoring Pane</h5>
                            <p>This configuration is for adding a score in the Evidence Assessment. See <a class="scrollto" href="#score-compliance-element">Checklist Scoring</a> section for more details.</p>
                            <img class="img-responsive" src="images/basic-config-basic-setup-element-scoring.png" alt="screen shot of Element Scoring Pane">
                        </section>

                        <section id="config-basic-setup-workflow-approval-pane" class="doc-section">
                            <h5>Workflow Approval Pane</h5>
                            <p>This configuration is for enabling the need for approval before a user can create a corrective action. See <a class="scrollto" href="#corrective-action-preventive-action">Corrective Action</a> section for more details.</p>
                            <img class="img-responsive" src="images/basic-config-basic-setup-workflow-approval.png" alt="screen shot of Workflow Approval Pane">
                        </section>

                        <section id="config-email-notification" class="doc-section">
                            <h4>Email Notification</h4>
                            <p>The Email Notification tab module has two components: (1) <b><a class="scrollto" href="#config-email-notification-evidence">Compliance Evidence</a></b> pane and (2) <b><a class="scrollto" href="#config-email-notification-capa">Corrective Action / Preventive Action</a></b>.</p>
                        </section>

                        <section id="config-email-notification-evidence" class="doc-section">
                            <h5>Compliance Evidence Pane</h5>
                            <p>This configuration is for the email notifications of a Compliance Evidence. You can customize on how TrueSight will update you about the modifications made in compliance evidence. You can select between “Every time a Draft Evidence is modified”, “Every time Evidence is submitted for Review” and “Every time Evidence / Element is Scored” options. See <a class="scrollto" href="#create-element">Create Compliance Elements</a> and <a class="scrollto" href="#create-chapters-standards-compliance">Create Chapters & Standards</a> section for more details.</p>
                            <p>You can also tag users that you want to be notified as well. See <a class="scrollto" href="#create-element">Create Compliance Elements</a> and <a class="scrollto" href="#create-chapters-standards-compliance">Create Chapters & Standards</a> section for more details.</p>
                            <img class="img-responsive" src="images/basic-config-email-notification.png" alt="screen shot of Email Notification pane">
                        </section>

                        <section id="config-email-notification-capa" class="doc-section">
                            <h5>Corrective Action / Preventive Action Pane</h5>
                            <p>This configuration is for the email notifications of a Corrective Action / Preventive Action. You can customize on how TrueSight will update you about the modifications made in compliance evidence. You can select between “Every time a Draft Evidence is modified”, “Every time Evidence is submitted for Review” and “Every time Evidence / Element is Scored” options. See <a class="scrollto" href="#create-element">Create Compliance Elements</a> and <a class="scrollto" href="#create-chapters-standards-compliance">Create Chapters & Standards</a> section for more details. </p>
                            <p>You can also tag users that you want to be notified as well.  See <a class="scrollto" href="#create-element">Create Compliance Elements</a> and <a class="scrollto" href="#create-chapters-standards-compliance">Create Chapters & Standards</a> section for more details.</p>
                            <img class="img-responsive" src="images/basic-config-email-notification.png" alt="screen shot of Email Notification pane">
                        </section>

                        <section id="config-personalize" class="doc-section">
                            <h4>Personalize</h4>
                            <p>In this tab, you can upload the logo of your own company.</p>
                            <img class="img-responsive" src="images/basic-config-personalize.png" alt="screen shot of Personalize pane">
                        </section>

                        <section id="manage-user" class="doc-section">
                            <div class="section-block">
                                <h3>Manage User Accounts</h3>
                            </div>
                        </section>

                        <section id="navigate-user-accounts" class="doc-section">
                            <h4>Navigate through User Accounts</h4>
                            <p>In this module, authorized users can manage User Accounts. To manage the User Accounts, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>User Accounts</b>” submodule.</li>
                                <li>
                                    In the User Account page, you can view the list of user accounts that has been made. You can also filter your view by selecting from a dropdown list the user role you want.
                                    <img class="img-responsive" src="images/user-accounts-filtering.png" alt="screen shot of filtering by role in user accounts">
                                </li>
                            </ol>
                        </section>

                        <section id="create-user" class="doc-section">
                            <h4>Create a User</h4>
                            <p>In this module, authorized users can create a User Account. To create a User Account, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>User Accounts</b>” submodule.</li>
                                <li>In the User Account page, click the “<b>+ Create</b>” button.</li>
                                <li>
                                    A User Account Information pop-up interface will appear.
                                    <img class="img-responsive" src="images/create-user-modal.png" alt="create user modal">

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>An authorized user can assign a specific Location (Site and Department) applicable only to a certain user.  See <a class="scrollto" href="#">TODODODO: "Where is this pointing to?" Tag / Untagged Multiple Site / Departments</a> section for more details.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>Complete the details needed then click the “<b>Create</b>” button.</li>
                                <li>Click the “<b>Cancel</b>” button if you want to cancel making a new account.</li>
                            </ol>
                        </section>

                        <section id="view-user" class="doc-section">
                            <h4>Viewing a User Details</h4>
                            <p>Only authorized users can view a User Details. To modify a user details your user account needs to have a “View User” access permission to the “Admin” Module > “<b>User Accounts</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>User Accounts</b>” submodule.</li>
                                <li>In the User Accounts page, press the <b>View User</b> <i class="fa fa-search"></i> button in the Action Column corresponding the User you wish to view. </li>
                                <li>
                                    A User Information pop up will appear.
                                    <img class="img-responsive" src="images/view-user-modal.png" alt="view user modal">
                                </li>
                                <li>Once done viewing, click the “<b>Close</b>” button.</li>
                            </ol>
                        </section>

                        <section id="modify-user" class="doc-section">
                            <h4>Modify a User Details</h4>
                            <p>Only authorized users can modify a User Details. To modify a user details your user account needs to have a “Modify User” access permission to the “Admin” Module > “<b>User Accounts</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>User Accounts</b>” submodule.</li>
                                <li>In the User Accounts page, press the <b>Modify User</b> <i class="fa fa-edit"></i> button in the Action Column corresponding the User you wish to modify.</li>
                                <li>
                                    A User Information pop up will appear.
                                    <img class="img-responsive" src="images/modify-user-modal.png" alt="modify user modal">
                                </li>
                                <li>Once done modifying the User fields, press the “<b>Save Changes</b>” button to complete the modification.</li>
                            </ol>
                        </section>

                        <section id="change-user-password" class="doc-section">
                            <h4>Change the Password of another User</h4>
                            <p>Only authorized users can change a password of Another Users. To change a password of another users, your user account needs to have a “Change Password” access permission to the “Admin” Module > “<b>User Accounts</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>User Accounts</b>” submodule.</li>
                                <li>In the User Accounts page, press the <b>Change Password</b> <i class="fa fa-key"></i> button in the Action Column corresponding the User you wish to change their password. </li>
                                <li>
                                    A User Change Password pop up will appear.
                                    <img class="img-responsive" src="images/change-user-password-modal.png" alt="change user password modal">
                                </li>
                                <li>Complete the details needed then click the “<b>Change Password</b>” button.</li>
                                <li>Click the “<b>Cancel</b>” button if you want to cancel changing a password.</li>
                            </ol>
                        </section>

                        <section id="delete-user" class="doc-section">
                            <h4>Delete a User</h4>
                            <p>Only authorized users can delete a User. To delete a user, your user account needs to have a “Delete User” access permission to the “Admin” Module > “<b>User Accounts</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>User Accounts</b>” submodule.</li>
                                <li>In the User Accounts page, press the <b>Delete User</b> <i class="fa fa-remove"></i> button in the Action Column corresponding the User you wish to delete.</li>
                                <li>
                                    A pop-up validation message will appear confirming if you want to proceed with the deletion or not.  Press the “<b>Yes</b>” button if you want to continue deleting the User.  Otherwise, press “<b>No</b>”.
                                    <img class="img-responsive" src="images/delete-user-modal.png" alt="delete user modal">
                                </li>
                                <li>Repeat steps 3 to 4 if you want to delete more users.</li>
                            </ol>
                        </section>

                        <section id="manage-user-roles" class="doc-section">
                            <div class="section-block">
                                <h3>Manage User Roles</h3>
                            </div>
                        </section>

                        <section id="navigate-role" class="doc-section">
                            <h4>Navigate through User Roles</h4>
                            <p>In this module, authorized users can manage User Roles. To manage the User Roles, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “User Roles” submodule.</li>
                                <li>
                                    In the User Roles page, you can view the list of user roles that has been made.
                                    <img class="img-responsive" src="images/roles-index.png" alt="screen shot of roles page">
                                </li>
                            </ol>
                        </section>

                        <section id="create-role" class="doc-section">
                            <h4>Create a User Roles</h4>
                            <p>In this module, authorized users can manage User Roles. To manage the User Roles, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “User Roles” submodule.</li>
                                <li>In the User Roles page, click the “<b>+ Create</b>” button.</li>
                                <li>
                                    A Role Information pop-up interface will appear.
                                    <img class="img-responsive" src="images/create-role-modal.png" alt="create role modal">
                                </li>
                                <li>Complete the details needed then click the “<b>Create</b>” button.</li>
                                <li>Click the “<b>Cancel</b>” button if you want to cancel making a new account.</li>
                            </ol>
                        </section>

                        <section id="view-role" class="doc-section">
                            <h4>Viewing a User Roles</h4>
                            <p>Only authorized users can view the User Roles. To view the user roles, your user account needs to have a “View User Role” access permission to the “Admin” Module > “<b>User Roles</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “User Roles” submodule.</li>
                                <li>In the User Roles page, press the <b>View User Role</b> <i class="fa fa-search"></i> button in the Action Column corresponding the User Roles you wish to view.</li>
                                <li>
                                    A Role Information pop up will appear.
                                    <img class="img-responsive" src="images/view-role-modal.png" alt="view role modal">
                                </li>
                                <li>Once done viewing, click the “Cancel” button.</li>
                            </ol>
                        </section>

                        <section id="modify-role" class="doc-section">
                            <h4>Modify a User Details</h4>
                            <p>Only authorized users can modify a User Roles. To modify a user roles, your user account needs to have a “Modify User Role” access permission to the “Admin” Module > “<b>User Roles</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “User Roles” submodule.</li>
                                <li>In the User Roles page, press the <b>Modify User Role</b> <i class="fa fa-edit"></i> button in the Action Column corresponding the User Roles you wish to modify.</li>
                                <li>
                                    A pop-up interface will appear.
                                    <img class="img-responsive" src="images/modify-role-modal.png" alt="modify role modal">
                                </li>
                                <li>Once done modifying the User Role fields and editing the roles, press the “<b>Save Changes</b>” button to complete the modification.</li>
                                <li>Click the “<b>Cancel</b>” button if you want to cancel the modification.</li>
                            </ol>
                        </section>

                        <section id="delete-role" class="doc-section">
                            <h4>Delete a User</h4>
                            <p>Only authorized users can delete a User Roles. To delete a user roles, your user account needs to have a “Delete User Role” access permission to the “Admin” Module > “<b>User Roles</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “User Roles” submodule.</li>
                                <li>In the User Roles page, press the <b>Delete User Role</b> <i class="fa fa-remove"></i> button in the Action Column corresponding the User Role you wish to delete.</li>
                                <li>
                                    A pop-up validation message will appear confirming if you want to proceed with the deletion or not.  Press the “<b>Yes</b>” button if you want to continue deleting the User. Otherwise, press “<b>No</b>”.
                                    <img class="img-responsive" src="images/delete-role-modal.png" alt="delete role modal">
                                </li>
                                <li>Repeat steps 3 to 4 if you want to delete more users.</li>
                            </ol>
                        </section>

                        <section id="manage-location-accounts" class="doc-section">
                            <div class="section-block">
                                <h3>Manage Location Accounts</h3>
                            </div>
                        </section>

                        <section id="navigate-location-accounts" class="doc-section">
                            <h4>Navigate through Location Accounts</h4>
                            <p>In this module, authorized users can manage Location Accounts. To manage the Location Accounts, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Location Accounts</b>” submodule.</li>
                                <li>In the Location Account page, you can view the list of location accounts that has been made. </li>
                            </ol>
                        </section>

                        <section id="create-location-accounts" class="doc-section">
                            <h4>Create a Site</h4>
                            <p>In this module, authorized users can manage Location Accounts. To manage the Location Accounts, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Location Accounts</b>” submodule.</li>
                                <li>In the Location Account page, click the “<b>+ Create</b>” button.</li>
                                <li>
                                    A Site Information pop-up interface will appear.
                                    <img class="img-responsive" src="images/create-site-modal.png" alt="create site modal">
                                </li>
                                <li>
                                    The Location account has initially been created.  Now you can start adding a department. Press “<b>Add Department</b>” button to create a department within your newly created Location account.
                                    <img class="img-responsive" src="images/create-site-expanded-modal.png" alt="create site modal">
                                </li>
                                <li>
                                    Complete the details of the “<b>Department</b>” pop-up interface.
                                    <img class="img-responsive" src="images/create-department-modal.png" alt="create department modal">
                                </li>
                                <li>
                                    After creating a department, you will redirected back to the Site Information pop-up with the list of the departments you made. If you want to create additional Departments within the same Site, press the “<b>Add Department</b>” button and repeat steps 6 to 7 of this section.
                                    <img class="img-responsive" src="images/create-site-expanded-with-department-modal.png" alt="create location modal">
                                </li>
                                <li>Once done creating Departments press the “<b>Create</b>” button in the “Site Information” interface to finalize the creation of both the Location Account and the corresponding Departments.</li>
                            </ol>
                        </section>

                        <section id="view-location-accounts" class="doc-section">
                            <h4>Viewing a Site & Departments</h4>
                            <p>Only authorized users can view a Site and its Departments. To modify a site and departments, your user account needs to have a “View” access permission to the “Admin” Module > “<b>Location Accounts</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Location Accounts</b>” submodule.</li>
                                <li>In the Location Accounts page, press the <b>View</b> <i class="fa fa-search"></i> button in the Action Column corresponding the Site you wish to view. </li>
                                <li>
                                    A Site Information pop up will appear. You will see the Site details and list of departments under it.
                                    <img class="img-responsive" src="images/view-location-modal.png" alt="view location modal">
                                </li>
                                <li>In viewing a department details, press also the <b>View</b> <i class="fa fa-search"></i> button in the Action Column corresponding the Department you wish to view.</li>
                                <li>
                                    Department Information pop up will appear. You will see the Site details and list of departments under it.
                                    <img class="img-responsive" src="images/view-department-modal.png" alt="view department modal">
                                </li>
                            </ol>
                        </section>

                        <section id="modify-location-accounts" class="doc-section">
                            <h4>Modify a Site & Departments</h4>
                            <p>Only authorized users can modify a Site and Departments. To modify a site and departments, your user account needs to have “Modify” access permission to the “Admin” Module > “<b>Location Accounts</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Location Accounts</b>” submodule.</li>
                                <li>In the Location Accounts page, press the <b>Modify</b> <i class="fa fa-edit"></i> button in the Action Column corresponding the Site you wish to modify.</li>
                                <li>
                                    A pop-up interface containing the Site details and the list of departments under it will appear.
                                    <img class="img-responsive" src="images/modify-location-modal.png" alt="modify location modal">
                                </li>
                                <li>Click the “<b>Update Site Details</b>” button.</li>
                                <li>Once done modifying the Site fields, press the “<b>Update Changes</b>” button to complete the modification. </li>
                                <li>
                                    To modify the <b>Departments</b>, press also the <b>Modify</b> <i class="fa fa-edit"></i> button in the Action Column corresponding the Department you wish to modify.
                                    <img class="img-responsive" src="images/modify-department-modal.png" alt="modify department modal">
                                </li>
                                <li>Once done modifying the Department fields, press the “<b>Save Changes</b>” button to complete the modification. </li>
                                <li>Afterwards, click the “<b>Save Changes</b>” button in the “Site Information” interface to finalize the modification of both the Location Account and the corresponding Departments.</li>
                            </ol>
                        </section>

                        <section id="delete-location-accounts" class="doc-section">
                            <h4>Delete a Site & Departments</h4>
                            <p>Only authorized users can delete a Site and Departments. To delete a site and departments, your user account needs to have a “Delete” access permission to the “Admin” Module > “<b>Location Accounts</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Location Accounts</b>” submodule.</li>
                                <li>In the Location Accounts page, press the <b>Delete</b> <i class="fa fa-remove"></i> button in the Action Column corresponding the Site you wish to delete.</li>
                                <li>
                                    A pop-up validation message will appear confirming if you want to proceed with the deletion or not.  Press the “<b>Yes</b>” button if you want to continue deleting the Site.  Otherwise, press “<b>No</b>”.
                                    <img class="img-responsive" src="images/delete-site-modal.png" alt="delete site modal">
                                </li>
                                <li>Repeat steps 3 to 4 if you want to delete more sites.</li>
                                <li>To delete a <b>Department</b>, press the <b>Modify</b> <i class="fa fa-edit"></i> button in the Action Column corresponding the Site in which the department you want to delete are under it.</li>
                                <li>A pop-up interface containing the Site details and the list of departments under it will appear. </li>
                                <li>In the list of the departments, press the <b>Delete</b> <i class="fa fa-remove"></i> button in the Action Column corresponding the Department you wish to delete.</li>
                                <li>
                                    A pop-up validation message will appear confirming if you want to proceed with the deletion or not.  Press the “<b>Yes</b>” button if you want to continue deleting the Department.  Otherwise, press “<b>No</b>”.
                                    <img class="img-responsive" src="images/delete-department-modal.png" alt="delete department modal">
                                </li>
                                <li>Repeat steps 8 to 9 if you want to delete more departments. </li>
                            </ol>
                        </section>

                        <section id="manage-newsletter" class="doc-section">
                            <div class="section-block">
                                <h3>Manage Newsletters</h3>
                            </div>
                        </section>

                        <section id="navigate-newsletter" class="doc-section">
                            <h4>Navigate through Newsletters</h4>
                            <p>In this module, authorized users can manage a News. To manage a news, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>News</b>” submodule.</li>
                                <li>
                                    In the News page, you can view the list of news that has been made.
                                    <img class="img-responsive" src="images/news-index.png" alt="news index">
                                </li>
                            </ol>
                        </section>

                        <section id="create-newsletter" class="doc-section">
                            <h4>Create a News</h4>
                            <p>In this module, authorized users can create a News. To create a news, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>News</b>” submodule.</li>
                                <li>In the News page, click the “<b>+ Create</b>” button.</li>
                                <li>
                                    A Create News pop-up interface will appear. Complete the needed details.
                                    <img class="img-responsive" src="images/create-news-modal.png" alt="create news modal">
                                </li>
                                <li>Once done creating a news press the “<b>Create</b>” button.</li>
                            </ol>
                        </section>

                        <section id="attach-newsletter" class="doc-section">
                            <h4>Attach Documents or Media</h4>
                            <p>In this module, authorized users can Attached Documents or Media in the news. To attach documents or media, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>News</b>” submodule.</li>
                                <li>In the News page, click the “<b>+ Create</b>” button.</li>
                                <li>
                                    A Create News pop-up interface will appear. Complete the needed details.
                                    <img class="img-responsive" src="images/create-news-modal.png" alt="create news modal">
                                </li>
                                <li>
                                    Click the “<b>Choose File</b>” button and select the documents or media you want to upload.

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>You can only attach an image file. (jpeg, jpg, png, gif, etc). No size limit.  You can also upload a gallery of image files.</p>
                                        </div>
                                    </div>

                                    <img class="img-responsive" src="images/news-preview-modal.png" alt="news preview modal">
                                </li>
                                <li>Once done creating a news press the “<b>Create</b>” button.</li>
                            </ol>
                        </section>

                        <section id="view-newsletter" class="doc-section">
                            <h4>Viewing a News</h4>
                            <p>All users can view a News. </p>
                            <ol class="list">
                                <li>
                                    To view a news, click the “<b>News</b>” pane in the side bar menu. After clicking, the list of news tiles with its published dates will appear.
                                    <img class="img-responsive" src="images/news-sidebar.png" alt="news list">
                                </li>
                                <li>
                                    Choose the News you want to read by clicking its title. A pop up interface will appear.
                                    <img class="img-responsive" src="images/news-preview-modal.png" alt="news preview">
                                </li>
                                <li>Click the “Close” button if you finish reading it.</li>
                            </ol>
                            <p>Another way of viewing a news is by an authorized user. To view a news, your user account needs to have a “View” access permission to the “Admin” Module > “<b>News</b>” Submodule. </p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>News</b>” submodule.</li>
                                <li>In the News page, press the <b>View</b> <i class="fa fa-search"></i> button in the Action Column corresponding the News you wish to view. </li>
                                <li>
                                    A View News pop up will appear. You will see the News details. Click the “<b>Close</b>” button if you finish reading.
                                    <img class="img-responsive" src="images/view-news-modal.png" alt="view news modal">
                                </li>
                            </ol>
                        </section>

                        <section id="modify-newsletter" class="doc-section">
                            <h4>Modify a News</h4>
                            <p>Only authorized users can modify a News. To modify a news, your user account needs to have “Modify” access permission to the “Admin” Module > “<b>News</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>News</b>” submodule.</li>
                                <li>In the News page, press the <b>Modify</b> <i class="fa fa-edit"></i> button in the Action Column corresponding the News you wish to modify.</li>
                                <li>
                                    A pop-up interface containing the News details will appear.
                                    <img class="img-responsive" src="images/modify-news-modal.png" alt="modify news modal">
                                </li>
                                <li>Once done modifying the News fields, press the “<b>Save Changes</b>” button to complete the modification.</li>
                            </ol>
                        </section>

                        <section id="delete-newsletter" class="doc-section">
                            <h4>Delete a News</h4>
                            <p>Only authorized users can delete a News. To delete a news, your user account needs to have a “Delete” access permission to the “Admin” Module > “<b>News</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>News</b>” submodule.</li>
                                <li>In the News page, press the <b>Delete</b> <i class="fa fa-remove"></i> button in the Action Column corresponding the News you wish to delete.</li>
                                <li>
                                    A pop-up validation message will appear confirming if you want to proceed with the deletion or not.  Press the “<b>Yes</b>” button if you want to continue deleting the News. Otherwise, press “<b>No</b>”.
                                    <img class="img-responsive" src="images/delete-news-modal.png" alt="delete news modal">
                                </li>
                                <li>Repeat steps 3 to 4 if you want to delete more news.</li>
                            </ol>
                        </section>

                        <section id="manage-quote" class="doc-section">
                            <div class="section-block">
                                <h3>Manage Quote of the Day</h3>
                            </div>
                        </section>

                        <section id="navigate-quote" class="doc-section">
                            <h4>Navigate through Quote of the Day</h4>
                            <p>In this module, authorized users can manage Quotes. To manage quotes, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Quotes</b>” submodule.</li>
                                <li>In the Quotes page, you can view the list of quotes that has been made.</li>
                            </ol>
                        </section>

                        <section id="create-quote" class="doc-section">
                            <h4>Create a Quote</h4>
                            <p>In this module, authorized users can create a Quote. To create a quote, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Quotes</b>” submodule.</li>
                                <li>In the Quotes page, click the “<b>+ Create</b>” button.</li>
                                <li>
                                    A Create Quote pop-up interface will appear.
                                    <img class="img-responsive" src="images/create-quote-modal.png" alt="create quote modal">

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>You can schedule the date when you want the quote to appear.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>Once done creating a quote press the “<b>Create</b>” button.</li>
                            </ol>
                        </section>

                        <section id="view-quote" class="doc-section">
                            <h4>Viewing the Quote of the day</h4>
                            <p>All users can view a Quotes.</p>
                            <p>A user can already view the quote of the day at the footer of the interface once they logged in.</p>
                            <img class="img-responsive" src="images/quote-in-footer.png" alt="quote in footer">
                            <p>Another way of viewing the quote of the day is by an authorized user. To view a quote, your user account needs to have “View” access permission to the “Admin” Module > “<b>Quotes</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Quotes</b>” submodule.</li>
                                <li>In the Quotes page, press the <b>View</b> <i class="fa fa-search"></i> button in the Action Column corresponding the Quotes you wish to view. </li>
                                <li>A Quote Information pop up will appear. You will see the Quote details. Click the “<b>Close</b>” button if you finish viewing.</li>
                            </ol>
                        </section>

                        <section id="modify-quote" class="doc-section">
                            <h4>Modify the Quote of the day</h4>
                            <p>Only authorized users can modify a Quote. To modify a quote, your user account needs to have “Modify” access permission to the “Admin” Module > “<b>Quotes</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Quotes</b>” submodule.</li>
                                <li>In the Quotes page, press the <b>Modify</b> <i class="fa fa-modify"></i> button in the Action Column corresponding the Quotes you wish to modify.</li>
                                <li>
                                    A pop-up interface containing the Quotes details will appear.
                                    <img class="img-responsive" src="images/modify-quote-modal.png" alt="modify quote modal">
                                </li>
                                <li>Once done modifying the Quotes fields, press the “<b>Save Changes</b>” button to complete the modification.</li>
                            </ol>
                        </section>

                        <section id="delete-quote" class="doc-section">
                            <h4>Delete a News</h4>
                            <p>Only authorized users can delete a News. To delete a news, your user account needs to have a “Delete” access permission to the “Admin” Module > “<b>Quotes</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Quotes</b>” submodule.</li>
                                <li>In the Quotes page, press the <b>Delete</b> <i class="fa fa-remove"></i> button in the Action Column corresponding the Quote you wish to delete.</li>
                                <li>
                                    A pop-up validation message will appear confirming if you want to proceed with the deletion or not.  Press the “<b>Yes</b>” button if you want to continue deleting the Quote.  Otherwise, press “<b>No</b>”.
                                    <img class="img-responsive" src="images/delete-quote-modal.png" alt="delete quote modal">
                                </li>
                                <li>Repeat steps 3 to 4 if you want to delete more quotes.</li>
                            </ol>
                        </section>

                        <section id="manage-framework" class="doc-section">
                            <div class="section-block">
                                <h3>Manage Framework Accounts</h3>
                            </div>
                        </section>

                        <section id="navigate-framework" class="doc-section">
                            <h4>Navigate through Framework Accounts</h4>
                            <p>In this module, authorized users can manage Framework Accounts. To manage the Framework Accounts, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Framework Accounts</b>” submodule.</li>
                                <li>
                                    In the Framework Account page, you can view the list of location accounts that has been made.
                                    <img class="img-responsive" src="images/framework-index.png" alt="Framework Accounts Page">
                                </li>
                            </ol>
                        </section>

                        <section id="create-framework" class="doc-section">
                            <h4>Create a Framework</h4>
                            <p>In this module, authorized users can create Framework Accounts. To create a Framework Accounts, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Framework Accounts</b>” submodule.</li>
                                <li>In the Framework Account page, click the “<b>+ Create</b>” button.</li>
                                <li>
                                    A Framework Information pop-up interface will appear.
                                    <img class="img-responsive" src="images/create-framework-modal.png" alt="create framework modal">
                                    <img class="img-responsive" src="images/create-framework-selecting-site-modal.png" alt="selecting site in create framework modal">

                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Note:</h4>
                                            <p>You can tag/untagged multiple Sites depending on the location applicability of your user account, See <a class="scrollto" href="#create-user">MANAGE USER ACCOUNTS: Create a User</a> section for more details.</p>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </section>

                        <section id="view-framework" class="doc-section">
                            <h4>Viewing a Framework</h4>
                            <p>Only authorized users can view a Framework. To modify a framework, your user account needs to have a “View” access permission to the “Admin” Module > “<b>Framework Accounts</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Framework Accounts</b>” submodule.</li>
                                <li>In the Framework Accounts page, press the <b>View</b> <i class="fa fa-search"></i> button in the Action Column corresponding the framework you wish to view. </li>
                                <li>
                                    A Framework Information pop up will appear. You will see the Framework details.
                                    <img class="img-responsive" src="images/view-framework-modal.png" alt="view framework modal">
                                </li>
                                <li>Click the “<b>Close</b>” button if you are done viewing. </li>
                            </ol>
                        </section>

                        <section id="modify-framework" class="doc-section">
                            <h4>Modify a Framework</h4>
                            <p>Only authorized users can modify a Framework. To modify a framework, your user account needs to have “Modify” access permission to the “Admin” Module > “<b>Framework Accounts</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Framework Accounts</b>” submodule.</li>
                                <li>In the Framework Accounts page, press the <b>Modify</b> <i class="fa fa-edit"></i> button in the Action Column corresponding the Framework you wish to modify.</li>
                                <li>
                                    A pop-up interface containing the Framework details.
                                    <img class="img-responsive" src="images/modify-framework-modal.png" alt="modify framework modal">
                                </li>
                                <li>Once done modifying the Framework fields, press the “<b>Save Changes</b>” button to complete the modification.</li>
                            </ol>
                        </section>

                        <section id="delete-framework" class="doc-section">
                            <h4>Delete a Framework</h4>
                            <p>Only authorized users can delete a Framework. To delete a framework, your user account needs to have a “Delete” access permission to the “Admin” Module > “<b>Framework Accounts</b>” Submodule.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Framework Accounts</b>” submodule.</li>
                                <li>In the Framework Accounts page, press the <b>Delete</b> <i class="fa fa-remove"></i> button in the Action Column corresponding the Framework you wish to delete.</li>
                                <li>
                                    A pop-up validation message will appear confirming if you want to proceed with the deletion or not.  Press the “<b>Yes</b>” button if you want to continue deleting the Framework.  Otherwise, press “<b>No</b>”.
                                    <img class="img-responsive" src="images/delete-framework-modal.png" alt="delete framework modal">
                                </li>
                                <li>Repeat steps 3 to 4 if you want to delete more framework.</li>
                            </ol>
                        </section>

                        <section id="security-management" class="doc-section">
                            <div class="section-block">
                                <h3>Security Management</h3>
                            </div>
                        </section>

                        <section id="navigate-security-parameters" class="doc-section">
                            <h4>Navigate through Security Parameters</h4>
                            <p>In this module, authorized users can manage Security Parameters. To manage the Security Parameters, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Security Parameters</b>” submodule.</li>
                                <li>
                                    In the Security Parameters page, you configure the security parameters.
                                    <img class="img-responsive" src="images/security-parameters-index.png" alt="Security Parameters Page">
                                </li>
                            </ol>
                            <p>The Security Parameters module has two components: (1) <a class="scrollto" href="#security-parameters-policy-pane">Password Policy</a> pane and (2) <a class="scrollto" href="#security-parameters-lockout-pane">Lockout Policy</a> pane.</p>
                        </section>

                        <section id="security-parameters-policy-pane" class="doc-section">
                            <h5>Password Policy Pane</h5>
                            <p>This configuration is to restrict a more secured Password. You can choose if you want to enable “Required Alphanumeric Characters”, “Require at least one Uppercase and Lowercase Letters”, "Require Minimum Password Length”, “Enforce Maximum and Minimum Age” and “Enforce number of Password History”. See <a class="scrollto" href="#change-your-own-password">Changing your Account Password</a> section for more details.</p>
                            <img class="img-responsive" src="images/security-parameters-password-policy.png" alt="Security Parameters, Password Policy Pane screen shot">
                        </section>

                        <section id="security-parameters-lockout-pane" class="doc-section">
                            <h5>Lockout Policy Pane</h5>
                            <p>This configuration is to give restrictions after minutes of idle time. You can choose if you want to enable “Enable Session Timeout after minutes of idle time”, “Enable Automatic Account Lockout after numbers of failed login attempts” and “Enable Account Lockout duration”.</p>
                            <img class="img-responsive" src="images/security-parameters-lockout-policy.png" alt="Security Parameters, Lockout Policy Pane screen shot">

                            <p>After you enabled the configurations you want, click the “<b>Save Changes</b>” button.</p>
                        </section>

                        <section id="logs" class="doc-section">
                            <div class="section-block">
                                <h3>Logs</h3>
                            </div>
                        </section>

                        <section id="navigate-logs" class="doc-section">
                            <h4>Navigate through Logs</h4>
                            <p>In this module, authorized users can view Logs. To view the Logs, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Logs</b>” submodule.</li>
                                <li>In the Logs page, you can view all the activities you’ve made.</li>
                            </ol>
                        </section>

                        <section id="export-logs" class="doc-section">
                            <h4>Export Logs</h4>
                            <p>In this module, authorized users export a Logs. To export a Log, your user account needs to have access permission to the “<b>Admin</b>” Module.</p>
                            <ol class="list">
                                <li>Click the “<b>Admin</b>” module in the Menu.</li>
                                <li>A Submodule list will appear under “Admin”. Click the “<b>Logs</b>” submodule.</li>
                                <li>
                                    In the Logs page, click the “Export Logs” button at the bottom right end of the interface.
                                    <img class="img-responsive" src="images/logs-index.png" alt="screen shot of logs page">
                                </li>
                            </ol>
                        </section>
                    </div><!--//content-inner-->
                </div><!--//doc-content-->
                <div class="doc-sidebar">
                    <nav id="doc-nav">
                        <ul id="doc-menu" class="nav doc-menu hidden-xs" data-spy="affix" style="overflow: auto; height: 100%;">
                            <li>
                                <a class="scrollto" href="#doc-header">Getting Started</a>
                                <ul class="nav doc-sub-menu">
                                    <li><a class="scrollto" href="#login">Login to your TrueSight Account</a></li>
                                    <li>
                                        <a class="scrollto" href="#familiarize">Familiarize</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#familiarize-sidebar">Sidebar</a></li>
                                            <li><a class="scrollto" href="#familiarize-truesight-logo">TrueSight Logo</a></li>
                                            <li><a class="scrollto" href="#familiarize-company-logo">Company Logo</a></li>
                                            <li><a class="scrollto" href="#familiarize-user-profile">User Profile</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="scrollto" href="#home-basic">Homepage Basics</a>
                                <ul class="nav doc-sub-menu">
                                    <li>
                                        <a class="scrollto" href="#home-basic">Manage Events</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#create-event">Create an Event</a></li>
                                            <li><a class="scrollto" href="#view-event">View an Event</a></li>
                                            <li><a class="scrollto" href="#modify-event">Modify an Event</a></li>
                                            <li><a class="scrollto" href="#delete-event">Delete an Event</a></li>
                                            <li><a class="scrollto" href="#restrict-event">Restrict Viewing of Events</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="scrollto" href="#home-familiarize">Familiarize Your Homepage</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#upcoming-events">Upcoming Events Pane</a></li>
                                            <li><a class="scrollto" href="#overall-compliance">Overall Compliance Pane</a></li>
                                            <li><a class="scrollto" href="#breakdown-compliance">Compliance Breakdown per Site Pane</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="scrollto" href="#standard-compliance">Standards & Compliance Elements</a>
                                <ul class="nav doc-sub-menu">
                                    <li>
                                        <a class="scrollto" href="#manage-chapters-standards">Manage Chapters & Standards</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#create-framework-compliance">Create Framework Account</a></li>
                                            <li><a class="scrollto" href="#create-chapters-standards-compliance">Create Chapters & Standards</a></li>
                                            <li><a class="scrollto" href="#modify-chapters-standards-compliance">Modify Chapters & Standards</a></li>
                                            <li><a class="scrollto" href="#delete-chapters">Delete Chapters</a></li>
                                            <li><a class="scrollto" href="#delete-standards">Delete Standards</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="scrollto" href="#manage-compliance-elements">Manage Compliance Elements</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#create-element">Create Compliance Elements</a></li>
                                            <li><a class="scrollto" href="#modify-element">Modify Compliance Elements</a></li>
                                            <li><a class="scrollto" href="#delete-element">Delete Compliance Elements</a></li>
                                            <li><a class="scrollto" href="#view-element">Viewing Compliance Elements</a></li>
                                            <li><a class="scrollto" href="#enable-element">Enable/Disable Compliance Elements</a></li>
                                            <li><a class="scrollto" href="#generate-element">Generate List of Compliance Elements</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="scrollto" href="#submission-and-scoring">Submission and Scoring of Evidences</a>
                                <ul class="nav doc-sub-menu">
                                    <li>
                                        <a class="scrollto" href="#submit-manage-compliance">Submit and Manage Evidence of Compliance</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#submit-evidence-compliance">Create and Submit Evidence of Compliance</a></li>
                                            <li><a class="scrollto" href="#attach-documents-evidence">Attach Documents or Media to Evidence</a></li>
                                            <li><a class="scrollto" href="#tag-multiple-location">Tag/Untagged Multiple Sites/Departments</a></li>
                                            <li><a class="scrollto" href="#modify-evidence-compliance">Modifying Evidence of Compliance</a></li>
                                            <li><a class="scrollto" href="#delete-evidence-compliance">Delete Evidence of Compliance</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="scrollto" href="#score-compliance-element">Score Compliance to Elements Through Checklist</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#navigate-checklist">Navigate through the Checklist</a></li>
                                            <li><a class="scrollto" href="#scoring-checklist">Score Compliance to Elements through Checklist</a></li>
                                            <li><a class="scrollto" href="#manage-location-applicability">Manage Location Applicability</a></li>
                                            <li><a class="scrollto" href="#understanding-element-status">Understanding Element Status</a></li>
                                            <li><a class="scrollto" href="#add-comments-attachments">Add Comments and Attachments</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="scrollto" href="#review-score-evidence">Review & Score Submitted Evidence</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#navigate-submitted-evidences">Navigate through Submitted Evidences</a></li>
                                            <li><a class="scrollto" href="#review-score-evidences">Review and Score Submitted Evidences</a></li>
                                            <li><a class="scrollto" href="#review-tag-location">Tag/Untagged Multiple Sites/Department</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="scrollto" href="#generate-status-section">Generate Status of each Measurable Elements</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#generate-status">Generate Status of Each Measurable Elements</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="scrollto" href="#corrective-action-preventive-action">Corrective Action / Preventive Action</a>
                                <ul class="nav doc-sub-menu">
                                    <li>
                                        <a class="scrollto" href="#capa-reports">CAPA Reports</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#navigate-capa">Navigate through CAPA Reports</a></li>
                                            <li><a class="scrollto" href="#create-capa">Create a Corrective Action</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="scrollto" href="#compliance-summary">Summary of Compliance</a>
                                <ul class="nav doc-sub-menu">
                                    <li>
                                        <a class="scrollto" href="#compliance-status">Status of Compliance</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#navigate-compliance-status-per-site">Navigate through Compliance Status per Site</a></li>
                                            <li><a class="scrollto" href="#navigate-historical-status-per-site">Navigate through Historical Status per Site</a></li>
                                            <li><a class="scrollto" href="#navigate-compliance-status-per-department">Navigate through Compliance Status per Department</a></li>
                                            <li><a class="scrollto" href="#navigate-historical-status-per-department">Navigate through Historical Status per Department</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="scrollto" href="#historical-records">Historical Records</a>
                                <ul class="nav doc-sub-menu">
                                    <li>
                                        <a class="scrollto" href="#historical-records-navigate">Navigate Through Historical Records</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#navigate-historical-records">Navigate through Historical Records</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="scrollto" href="#admin-configurations">Admin Configurations</a>
                                <ul class="nav doc-sub-menu">
                                    <li>
                                        <a class="scrollto" href="#manage-basic-config">Manage Basic Configurations</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#navigate-basic-config">Navigate through Basic Configurations</a></li>
                                            <li><a class="scrollto" href="#config-basic-setup">Basic Setup</a></li>
                                            <li><a class="scrollto" href="#config-email-notification">Email Notification</a></li>
                                            <li><a class="scrollto" href="#config-personalize">Personalize</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="scrollto" href="#manage-user">Manage User Accounts</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#navigate-user-accounts">Navigate through User Accounts</a></li>
                                            <li><a class="scrollto" href="#create-user">Create a User</a></li>
                                            <li><a class="scrollto" href="#view-user">Viewing a User Details</a></li>
                                            <li><a class="scrollto" href="#modify-user">Modify a User Details</a></li>
                                            <li><a class="scrollto" href="#change-user-password">Change the Password of another User</a></li>
                                            <li><a class="scrollto" href="#delete-user">Delete a User</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="scrollto" href="#manage-user-roles">Manage User Roles</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#navigate-role">Navigate through User Roles</a></li>
                                            <li><a class="scrollto" href="#create-role">Create a User Roles</a></li>
                                            <li><a class="scrollto" href="#view-role">Viewing a User Roles</a></li>
                                            <li><a class="scrollto" href="#modify-role">Modify a User Details</a></li>
                                            <li><a class="scrollto" href="#delete-role">Delete a User</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="scrollto" href="#manage-location-accounts">Manage Location Accounts</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#navigate-location-accounts">Navigate through Location Accounts</a></li>
                                            <li><a class="scrollto" href="#create-location-accounts">Create a Site</a></li>
                                            <li><a class="scrollto" href="#view-location-accounts">Viewing a Site & Departments</a></li>
                                            <li><a class="scrollto" href="#modify-location-accounts">Modify a Site & Departments</a></li>
                                            <li><a class="scrollto" href="#delete-location-accounts">Delete a Site & Departments</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="scrollto" href="#manage-newsletter">Manage Newsletters</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#navigate-newsletter">Navigate through Newsletters</a></li>
                                            <li><a class="scrollto" href="#create-newsletter">Create a News</a></li>
                                            <li><a class="scrollto" href="#attach-newsletter">Attach Documents or Media</a></li>
                                            <li><a class="scrollto" href="#view-newsletter">Viewing a News</a></li>
                                            <li><a class="scrollto" href="#modify-newsletter">Modify a News</a></li>
                                            <li><a class="scrollto" href="#delete-newsletter">Delete a News</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="scrollto" href="#manage-quote">Manage Quote of the Day</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#navigate-quote">Navigate through Quote of the Day</a></li>
                                            <li><a class="scrollto" href="#create-quote">Create a Quote</a></li>
                                            <li><a class="scrollto" href="#view-quote">Viewing the Quote of the day</a></li>
                                            <li><a class="scrollto" href="#modify-quote">Modify the Quote of the day</a></li>
                                            <li><a class="scrollto" href="#delete-quote">Delete a News</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="scrollto" href="#manage-framework">Manage Framework Accounts</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#navigate-framework">Navigate through Framework Accounts</a></li>
                                            <li><a class="scrollto" href="#create-framework">Create a Framework</a></li>
                                            <li><a class="scrollto" href="#view-framework">Viewing a Framework</a></li>
                                            <li><a class="scrollto" href="#modify-framework">Modify a Framework</a></li>
                                            <li><a class="scrollto" href="#delete-framework">Delete a Framework</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="scrollto" href="#security-management">Security Management</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#navigate-security-parameters">Navigate through Security Parameters</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="scrollto" href="#logs">Logs</a>
                                        <ul class="nav doc-sub-menu" style="padding-left: 20px;">
                                            <li><a class="scrollto" href="#navigate-logs">Navigate through Logs</a></li>
                                            <li><a class="scrollto" href="#export-logs">Export Logs</a></li>
                                            <li><a class="scrollto" href="#"></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul><!--//doc-menu-->
                    </nav>
                </div><!--//doc-sidebar-->
            </div><!--//doc-body-->
        </div><!--//container-->
    </div>
@endsection