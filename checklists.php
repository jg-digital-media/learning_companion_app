<?php include "assets/template-parts/header.php"; ?>
    
    <header>

        <h1>Tech Learning Companion App</h1>

        <span>By Jonnie Grieve Digital Media</span>

    </header>   

    <main class="page page---checklists">

        <span id="open_page_menu" onclick="openNav()">&#9776;</span>

        <nav class="navigation main---nav">

            <div class="close_menu" role="close-menu" onclick="closeNav()">
                <div class="close_inner_container">
                X
                </div>
            </div>

            <div class="sub---navigation">

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="checklists.php">Flashcards</a></li>
                    <li><a href="checklists.php">Quizzes</a></li>
                    <li><a href="progress.php">Progress</a></li>
                    <li><a href="motivation.php">Motivation</a></li>
                </ul>

            </div>

        </nav>

    </main>

    
    <p>checklists.php</p>    

<?php include "assets/template-parts/footer.php"; ?>