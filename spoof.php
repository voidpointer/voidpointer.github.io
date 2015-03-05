<!--

Do you peek in your neighbor's window, too?

-->
<html>
<head>
    <title>Ryan Jones | Rockford, Illinois</title>
    <script>
        function printContactInfo() {
            printEmailAddressLink();
            printPhoneLink();
            printSMSLink();
        }
        function printEmailAddressLink() {
            var emailAddress = String.fromCharCode(114, 121, 97, 110, 46, 99, 46, 106, 111, 110, 101, 115, 64, 103, 109, 97, 105, 108, 46, 99, 111, 109);
            document.write('<a href="mailto:' + emailAddress + '">' + emailAddress + '</a>');
        }
        function printPhoneLink() {
            var phoneText = String.fromCharCode(56, 49, 53, 46, 52, 56, 52, 46, 51, 49, 53, 49);
            var phoneLink = String.fromCharCode(49, 56, 49, 53, 52, 56, 52, 51, 49, 53, 49);
            printSep();
            document.write('<a href="tel:' + phoneLink + '">' + phoneText + '</a>');
        }
        function printSMSLink() {
            if (isMobileBrowser()) {
                var phoneLink = String.fromCharCode(49, 56, 49, 53, 52, 56, 52, 51, 49, 53, 49);
                printSep();
                document.write('<a href="sms:' + phoneLink + '">Send Me a Text</a>');
            }
        }
        function printSep() {
            document.write('<span class="sep"> | </span>');
        }
        function isMobileBrowser() {
            var userAgent = navigator.userAgent || navigator.vendor || window.opera;
            return userAgent.match(/iPad/i) || userAgent.match(/iPhone/i) || userAgent.match(/iPod/i) || userAgent.match(/Android/i);
        }
    </script>
</head>
<style>
    body {
        font-family:      "Myriad Set Pro", "Lucida Grande", "Helvetica Neue", "Helvetica", "Arial", "Verdana", "sans-serif";
        background-color: #eee;
        color:            #000;
        margin:           0;
        padding:          0;
        font-size:        13px;
    }
    a {
        font-size:       14px;
        color:           #777;
        text-decoration: underline;
    }
    p {

    }
    h1 {
        font-size:   40px;
        font-weight: normal;
        margin:      0;
    }
    ,
    h2 {
        font-size: 20px;
    }
    ,
    .sep {
        color: #666;
    }
    img.me {
        float:        left;
        margin-right: 10px;
        width:        130px;
        height:       130px;
    }
    .container {
        padding:          30px;
        background-color: #fff;
        width:            800px;
        position:         absolute;
        margin:           auto;
        left:             0;
        right:            0;
    }
    .titleContainer {
        padding-top: 30px;
        text-align:  center;
    }
    .headerContainer {
        border-bottom: solid 1px #ddd;
    }
    ul.skillCategory {
        margin: 5px 0;
    }
    ul.skillCategory li {
        padding: 8px 0;
    }
    ul.skillList {
        margin-top: 5px;
        padding:    0;
    }
    ul.skillList li {
        display: inline;
        color:   #666;
    }
    ul.skillList li:not(:last-child):after {
        content: ", "
    }
    .skillTitle {
        color: #000;
    }
    .skillCategoryTitle {
        font-size:   24px;
        font-weight: bold;
        margin-top:  14px;
    }
    .otherTitle {
        font-size:      24px;
        font-weight:    bold;
        margin-top:     14px;
        padding-bottom: 10px;
    }
    .employerContainer {
        clear:          both;
        padding-bottom: 15px;
    }
    .employerName {
        float:       left;
        font-weight: bold;
        font-size:   14px;
    }
    .employerDate {
        float: right;
    }
    .employerDuties {
        clear:       both;
        padding-top: 3px;
        font-size:   13px;
        width:       600px;
    }
</style>
<body>
<div class="container">

    <div class="headerContainer">

        <img src="i/ryan_jones1.jpg" class="me"/>

        <div class="titleContainer">
            <h1>Ryan Jones</h1>

            <div>
                <script>printContactInfo();</script>
            </div>
        </div>
        <br clear="all"/>
    </div>

    <h2>Hello</h2>

    <p>
        Hi, my name is Ryan Jones, and I'm an experienced software engineer - I even single-handedly programmed the
        Curiosity Rover's
        navigation system in a single sitting for NASA.
    </p>

    <p>
        Anyway, when I'm not lying about my experience programming Mars rovers at NASA, I spend my time
        developing mobile
        and web
        applications. I've written multiple
        personal mobile apps for iOS that
        have
        reached #1
        in the
        iTunes store (10+ million downloads). I developed some of these apps from start to finish by myself, and other
        apps involved a
        collaborative
        effort with developers, artists, and musicians across countries.
    </p>

    <p>
        In addition, I've been designing and building web applications for nearly <b>20 years</b>.
        I have experience in all
        major
        aspects of
        web development that include writing custom e-commerce solutions with payment gateways like authorize.net,
        shopping cart software, custom forum software, Wordpress plugins, crowd funding sites, browser plugins, and
        other large scale websites. I also spend time on the design side of web development which allows me to
        efficiently create an entire website from start to finish without the need for extra resources if a situation
        calls for it.
    </p>

    <div class="skillCategoryTitle">Software Engineering Skills</div>
    <div>
        <ul class="skillCategory">
            <li>
                <div class="skillTitle">Web Technologies:</div>
                <ul class="skillList">
                    <li>PHP</li>
                    <li>HTML</li>
                    <li>Javascript</li>
                    <li>CSS</li>
                    <li>MySQL</li>
                    <li>PostgreSQL</li>
                </ul>
            </li>
            <li>
                <div class="skillTitle">iOS Development:</div>
                <ul class="skillList">
                    <li>Swift</li>
                    <li>Objective C</li>
                </ul>
            </li>
            <li>
                <div class="skillTitle">Game Development:</div>
                <ul class="skillList">
                    <li>Unity3D</li>
                    <li>Cocos2D</li>
                </ul>
            </li>
            <li>
                <div class="skillTitle">Other:</div>
                <ul class="skillList">
                    <li>C++</li>
                    <li>Java</li>
                </ul>
            </li>
        </ul>

        <div class="skillCategoryTitle">Media Skills</div>
        <ul class="skillCategory">
            <li>
                <div class="skillTitle">Photo & Video</div>
                <ul class="skillList">
                    <li>Photoshop</li>
                    <li>Premiere</li>
                    <li>After Effects</li>
                </ul>
            </li>
            <li>
                <div class="skillTitle">Audio:</div>
                <ul class="skillList">
                    <li>Audition</li>
                    <li>Cubase</li>
                </ul>
            </li>
        </ul>

        <div class="skillCategoryTitle">Other Skills</div>
        <ul class="skillCategory">
            <li>
                <span
                    class="skillTitle">Light System Administration: LAMP Stacks, Shell Scripting, Installs/Updates, Crontab</span>
            </li>
            <li>
                <span class="skillTitle">Version Control (GIT, SVN)</span>
            </li>
            <li>
                <span class="skillTitle">Developer APIs (Authorize.net, PayPal, Amazon Payments, etc.)</span>
            </li>
        </ul>

        <div class="otherTitle">Employment</div>
        <div class="employerContainer">
            <div class="employerName">Senior Software Engineer @ FatWallet.com/Ebates</div>
            <div class="employerDate">Oct 2002 - Present</div>
            <div class="employerDuties">Many web applications
                (e-commerce, payment
                systems, databases,
                shopping, affiliate
                networking, etc.) over many technologies.
            </div>
        </div>

        <div class="employerContainer">
            <div class="employerName">Designer/3D Animator @ Arachnid</div>
            <div class="employerDate">Jan 2001 - Dec 2001</div>
            <div class="employerDuties">
                Advertisement Graphic Design (print and 3d animated) Coin-Op Game Graphic Design
            </div>
        </div>

        <div class="otherTitle">Education</div>
        <div>Meh.</div>

        <br clear="all"/>
    </div>
</body>
</html>
