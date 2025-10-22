<?php include "assets/template-parts/header.php"; ?>

<body class="">
    
    <header>

        <h1>Tech Learning Companion App</h1>

        <span>By Jonnie Grieve Digital Media</span>

    </header>   

    <main class="page page---flashcards">

        <nav class="navigation main---nav">

            <div class="close_menu" role="close-menu" onclick="closeNav()">
                <div class="close_inner_container">
                X
                </div>
            </div>

            <div class="sub---navigation">

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="cards.php">Flashcards</a></li>
                    <li><a href="quiz.php">Quizzes</a></li>
                    <li><a href="checklists.php">Progress</a></li>
                    <li><a href="motivation.php">Motivation</a></li>
                </ul>

            </div>

        </nav>

        <section class="site---search--container">

            <!--- ham menu icon --->
            <span id="open_page_menu" onclick="openNav()">&#9776;</span>
            <!-- <label class="site---search--label" for="search">Search</label> -->

            <aside class="search">
                <input type="text" id="search_text_input" class="site---search--input" placeholder="Search...">
                <a href="#" id="btn---search" class="site---search--button"><span>&#x1F50E;</span> Search</a>
                <div class="site---search--results"></div>
            </aside>

        </section>

        <section class="site---topic--navigation_container">
            
            <nav class="site---topic--navigation">

                <ul>            
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">SCSS</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                    <li><a href="#">JavaScript DOM Scripting,</a></li>
                    <li><a href="#">PHP,</a></li>
                    <li><a href="#">WordPress,</a></li>
                    <li><a href="#">Web Design,</a></li>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">Android</a></li>
                    <li><a href="#">jQuery</a></li>
                    <li><a href="#">Git</a></li>
                    <li><a href="#">Node.js</a></li>
                    <li><a href="#">Structured Query Language</a></li>
                    <li><a href="#">Connnect to a Database PHP</a></li>
                </ul>

            </nav>

            <article class="topic---flashcards--container">

                <!-- <h2>HTML</h2> -->

                <article>
                    
                    <ul>
                        <li><p>Cards content</p></li>
                    </ul>

                </article>

            </article>
            
        </section>

    </main>  

    <p>cards.php</p>      

    <!-- <nav class="site---main--navigation">
        <ul>
            <li><a href="cards.html">Flashcards</a></li>
            <li><a href="quiz.html">Quiz</a></li>
            <li><a href="checklists.html">Checklists</a></li>
            <li><a href="motivation.html">Motivation</a></li>
        </ul>
    </nav>

    <nav class="site---topic--navigation">
        <ul>            
            <li><a href="#">HTML</a></li>
            <li><a href="#">SCSS</a></li>
            <li><a href="#">CSS</a></li>
            <li><a href="#">JavaScript</a></li>
            <li><a href="#">JavaScript DOM Scripting,</a></li>
            <li><a href="#">PHP,</a></li>
            <li><a href="#">WordPress,</a></li>
            <li><a href="#">Web Design,</a></li>
            <li><a href="#">Java</a></li>
            <li><a href="#">Android</a></li>
            <li><a href="#">jQuery</a></li>
            <li><a href="#">Git</a></li>
            <li><a href="#">Node.js</a></li>
            <li><a href="#">Structured Query Language</a></li>
            <li><a href="#">Connnect to a Database PHP</a></li>
        </ul>
    </nav> -->    

<?php include "assets/template-parts/footer.php"; ?>