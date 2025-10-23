<?php include "assets/template-parts/header.php"; ?>
    
<body class="">
    
    <header>

        <h1>Tech Learning Companion App</h1>

        <span>By Jonnie Grieve Digital Media</span>

    </header>   

    <main class="page page---checklists">

        <!-- <span id="open_page_menu" onclick="openNav()">&#9776;</span> -->

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
            
            <!-- import list from template part --->
            <?php include "assets/template-parts/topic-list-cards.php"; ?>  

            <article class="progress---checklist--container">

                <!-- <h2>HTML</h2> -->

                <ul>

                    <li>     

                        <span>
                            <img src="assets/images/progress_html.png" alt="HTML" title="HTML" /> 
                        </span>

                        <div class="progress---checklist--item">
                            <span class="progress---checklist--status">Incomplete</span>
                            <span class="progress---checklist--icon icon---incomplete">&nbsp;</span>
                        </div>
                                    
                    </li>
                    
                    <li>     

                        <span>
                            <img src="assets/images/progress_html.png" alt="HTML" title="HTML" /> 
                        </span>

                        <div class="progress---checklist--item">
                            <span class="progress---checklist--status">Incomplete</span>
                            <span class="progress---checklist--icon icon---incomplete">&nbsp;</span>
                        </div>
                                    
                    </li>
                    
                    <li>     

                        <span>
                            <img src="assets/images/progress_html.png" alt="HTML" title="HTML" /> 
                        </span>

                        <div class="progress---checklist--item">
                            <span class="progress---checklist--status">Incomplete</span>
                            <span class="progress---checklist--icon icon---incomplete">&nbsp;</span>
                        </div>
                                    
                    </li>
                    
                    <li>     

                        <span>
                            <img src="assets/images/progress_html.png" alt="HTML" title="HTML" /> 
                        </span>

                        <div class="progress---checklist--item">
                            <span class="progress---checklist--status">Incomplete</span>
                            <span class="progress---checklist--icon icon---incomplete">&nbsp;</span>
                        </div>
                                    
                    </li>
                    
                    <li>     

                        <span>
                            <img src="assets/images/progress_html.png" alt="HTML" title="HTML" /> 
                        </span>

                        <div class="progress---checklist--item">
                            <span class="progress---checklist--status">Incomplete</span>
                            <span class="progress---checklist--icon icon---incomplete">&nbsp;</span>
                        </div>
                                    
                    </li>
                    
                    <li>     

                        <span>
                            <img src="assets/images/progress_html.png" alt="HTML" title="HTML" /> 
                        </span>

                        <div class="progress---checklist--item">
                            <span class="progress---checklist--status">Incomplete</span>
                            <span class="progress---checklist--icon icon---incomplete">&nbsp;</span>
                        </div>
                                    
                    </li>
                    
                    <li>     

                        <span>
                            <img src="assets/images/progress_html.png" alt="HTML" title="HTML" /> 
                        </span>

                        <div class="progress---checklist--item">
                            <span class="progress---checklist--status">Incomplete</span>
                            <span class="progress---checklist--icon icon---incomplete">&nbsp;</span>
                        </div>
                                    
                    </li>
                    
                    <li>     

                        <span>
                            <img src="assets/images/progress_html.png" alt="HTML" title="HTML" /> 
                        </span>

                        <div class="progress---checklist--item">
                            <span class="progress---checklist--status">Incomplete</span>
                            <span class="progress---checklist--icon icon---incomplete">&nbsp;</span>
                        </div>
                                    
                    </li>
                    
                    <li>     

                        <span>
                            <img src="assets/images/progress_html.png" alt="HTML" title="HTML" /> 
                        </span>

                        <div class="progress---checklist--item">
                            <span class="progress---checklist--status">Incomplete</span>
                            <span class="progress---checklist--icon icon---incomplete">&nbsp;</span>
                        </div>
                                    
                    </li>
                    
                </ul>

            </article>

        </section>

    </main>

    
    <!-- <p>checklists.php</p>  -->   

<?php include "assets/template-parts/footer.php"; ?>