<?php include "assets/template-parts/header.php"; ?>

<body class="">
    
    <header>

        <h1>Tech Learning Companion App</h1>

        <span>By Jonnie Grieve Digital Media</span>

    </header>   

    <main class="page page---motivation">

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

        <section class="motivation---page--container">
            
            <h2>If you need motivation or inspiration...</h2>

           <!--  <a href="index.php" class="btn btn--primary" id="btn---home">Home</a> -->

            <div>

                <p>The purpose of this app is to help you learn new skills and concepts. It is designed to be a tool that you can use to learn new things, and to help you keep track of your progress.</p>

            </div>

            <a href="#" class="btn btn--load--quote" id="reload_quote">Load a new quote ></a>


        </section>

    </main>

    <p>motivation.php</p>   

<?php include "assets/template-parts/footer.php"; ?>