<!-- Head -->
<?php include 'head.php'; ?>
<body class="cs">
    <header id="cs-header">
        <div class="cs-title">
            <h1>
                <a title="Go back to joeportfolio" href="index.php">Joe Portfolio</a>
            </h1>
            <h2>Quick Cheat Sheet</h2>
        </div>
        <nav>
            <label>Search Joe's Cheat Sheet:</label>
            <input id="cs-search" type="search" placeholder="Search..." autocomplete="off" />
        </nav>
    </header>
    <div id="cs-intro" class="cs-container">
        <h1>Joe's Cheat Sheet</h1>
        <p>This Cheat Sheet help Joe to quick call back his skills. This Cheat is going to list the thing that he learned from time to time with implementing directly onsite.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="cs-container cs-sidebar">
                    <ul class="nav cs-sidenav">
                        <li class="active">
                            <a href="#cs-AngularJs">AngularJs</a>
                        </li>
                        <li>
                            <a href="#cs-SVG">SVG</a>
                        </li>
                        <li>
                            <a href="#cs-Dojo">Dojo</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="cs-container">
                    <div class="cs-section">
                        <h1 id="cs-AngularJs">AngularJs</h1>
                        <p>Why use AngularJs?<br/>
                            <br/>
                            AngularJS is a relatively new JavaScript framework by Google, designed to make your front-end development as easy as possible. There are plenty of frameworks and plugins available. As such, it can sometimes prove difficult to sift through all of the noise to find useful tools.
                        </p>
                        <h2>1. It was developed by google </h2>
                        <p>Because AngularJS is built by Google, you can be sure that you're dealing with efficient and reliable code that will scale with your project. If you're looking for a framework with a solid foundation, Angular is your choice!</p>
                        <h2>2. It's Comprehensive</h2>
                        <p>
                            • REST Easy <br/>
                            • MVVM to the Rescue<br/>
                            • Data Binding and Dependency Injection<br/>
                            • Extends HTML<br/>
                            • Makes HTML your Template<br/>
                            • Enterprise-level Testing<br/>
                        </p>
                        <h3>3. Get Started in Minutes</h3>
                        Easy to prototype. The demo below showed my prototype with Third party API from Trakt.tv.
                        <div class="cs-implementation">
                            <img src="img/cheatsheet/AngularJS.png" alt="svg img">
                        </div>
                        <a class="btn btn-default btn-lg btn-block" href="AngularJsDemo">Demo</a>
                    </div>
                </div>
                <div class="cs-container">
                    <div class="cs-section">
                        <h1 id="cs-SVG">SVG</h1>
                        <p>Why use SVG at all?<br/>
                            <br/>
                            • Small file sizes that compress well<br/>
                            • Scales to any size without losing clarity (except very tiny)<br/>
                            • Looks great on retina displays<br/>
                            • Design control like interactivity and filters<br/>
                        </p>
                        <div class="cs-implementation">
                            <!-- SVG demo -->
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                 width="612px" height="502.174px" viewBox="0 65.326 612 502.174" enable-background="new 0 65.326 612 502.174"
                                 xml:space="preserve" class="logo">

                                <ellipse class="ground" cx="283.5" cy="487.5" rx="259" ry="80"/>
                                <path class="kiwi" d="M210.333,65.331C104.367,66.105-12.349,150.637,1.056,276.449c4.303,40.393,18.533,63.704,52.171,79.03
                                                      c36.307,16.544,57.022,54.556,50.406,112.954c-9.935,4.88-17.405,11.031-19.132,20.015c7.531-0.17,14.943-0.312,22.59,4.341
                                                      c20.333,12.375,31.296,27.363,42.979,51.72c1.714,3.572,8.192,2.849,8.312-3.078c0.17-8.467-1.856-17.454-5.226-26.933
                                                      c-2.955-8.313,3.059-7.985,6.917-6.106c6.399,3.115,16.334,9.43,30.39,13.098c5.392,1.407,5.995-3.877,5.224-6.991
                                                      c-1.864-7.522-11.009-10.862-24.519-19.229c-4.82-2.984-0.927-9.736,5.168-8.351l20.234,2.415c3.359,0.763,4.555-6.114,0.882-7.875
                                                      c-14.198-6.804-28.897-10.098-53.864-7.799c-11.617-29.265-29.811-61.617-15.674-81.681c12.639-17.938,31.216-20.74,39.147,43.489
                                                      c-5.002,3.107-11.215,5.031-11.332,13.024c7.201-2.845,11.207-1.399,14.791,0c17.912,6.998,35.462,21.826,52.982,37.309
                                                      c3.739,3.303,8.413-1.718,6.991-6.034c-2.138-6.494-8.053-10.659-14.791-20.016c-3.239-4.495,5.03-7.045,10.886-6.876
                                                      c13.849,0.396,22.886,8.268,35.177,11.218c4.483,1.076,9.741-1.964,6.917-6.917c-3.472-6.085-13.015-9.124-19.18-13.413
                                                      c-4.357-3.029-3.025-7.132,2.697-6.602c3.905,0.361,8.478,2.271,13.908,1.767c9.946-0.925,7.717-7.169-0.883-9.566
                                                      c-19.036-5.304-39.891-6.311-61.665-5.225c-43.837-8.358-31.554-84.887,0-90.363c29.571-5.132,62.966-13.339,99.928-32.156
                                                      c32.668-5.429,64.835-12.446,92.939-33.85c48.106-14.469,111.903,16.113,204.241,149.695c3.926,5.681,15.819,9.94,9.524-6.351
                                                      c-15.893-41.125-68.176-93.328-92.13-132.085c-24.581-39.774-14.34-61.243-39.957-91.247
                                                      c-21.326-24.978-47.502-25.803-77.339-17.365c-23.461,6.634-39.234-7.117-52.98-31.273C318.42,87.525,265.838,64.927,210.333,65.331
                                                      z M445.731,203.01c6.12,0,11.112,4.919,11.112,11.038c0,6.119-4.994,11.111-11.112,11.111s-11.038-4.994-11.038-11.111
                                                      C434.693,207.929,439.613,203.01,445.731,203.01z"/>
                                <!-- SVG filter work in Chrome -->
                                <filter id="pictureFilter" >
                                    <feGaussianBlur stdDeviation="15" />
                                </filter>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="cs-container">
                    <div class="cs-section">
                        <h1 id="cs-Dojo">Dojo</h1>
                        <p>To be finished.
                        </p>
                        <div class="cs-implementation">
                            xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>
                            xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>
                            xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>
                            xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>
                            xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>
                            xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>
                            xxxxxxxxxxxxxxxxxxxxxxxxxx<br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>
</html>