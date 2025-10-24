<?php include "assets/template-parts/header.php"; ?>

<body class="">
    
    <header>

        <h1>Tech Learning Companion App</h1>

        <span>By Jonnie Grieve Digital Media</span>

    </header>   

    <main class="page page---quizzes">

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

            <article class="topic---quizzes--container">

                <!-- <h2>HTML</h2> -->

                <article>
                    
                    <!-- <p>Quiz content</p> -->

                    <!-- Progress Tracker 

                    <nav class="progress---checklist--container">

                        <ul>
                            <li class="status---indicator status---complete">&nbsp;</li>
                            <li class="status---indicator status---complete">&nbsp;</li>   
                            <li class="status---indicator status---incomplete">&nbsp;</li>
                            <li class="status---indicator status---incomplete">&nbsp;</li>
                            <li class="status---indicator status---incomplete">&nbsp;</li>
                            <li class="status---indicator status---incomplete">&nbsp;</li>
                            <li class="status---indicator status---incomplete">&nbsp;</li>
                            <li class="status---indicator status---incomplete">&nbsp;</li>
                            <li class="status---indicator status---incomplete">&nbsp;</li>
                            <li class="status---indicator status---incomplete">&nbsp;</li>
                            <li class="status---indicator status---incomplete">&nbsp;</li>
                        </ul>

                        <aside class="progress---stats--container">

                            <div class="progress--stats">12 of 10</div>
                            <div class="progress---percentage">0%</div>

                        </aside>
                        
                    </nav> -->

                    <h2>Quiz/Trivia: HTML</h2>

                    <article class="quiz quiz---trivia">

                        <div class="quiz---content--container">
                                
                            <div class="quiz---icon">&#128211;</div>
                            
                            <div class="quiz---content">
                               
                                <p>What is the difference between &lt;p&gt; and &lt;h1&gt;?</p>

                            </div>

                            <div class="quiz---buttons--container">

                                <div class="quiz---buttons">
                                    <a href="#" class="btn btn--quiz">A</a>
                                    <a href="#" class="btn btn--quiz">B</a>
                                    <a href="#" class="btn btn--quiz">C</a>
                                    <a href="#" class="btn btn--quiz">D</a>
                                </div>

                            </div>
                            
                            <div class="quiz---feedback--container">

                                <div class="quiz---feedback feedback--correct">
                                    <p>Correct!</p>
                                </div>

                                <div class="quiz---feedback feedback--incorrect">
                                    <p>Incorrect!</p>
                                </div>

                                <div class="quiz---feedback">
                                    <!-- <p>Incorrect!</p> -->
                                </div>
                            </div>

                        </div>

                    </article>

                    <article class="quiz quiz---code quiz---flipcard">

                        <div class="quiz---flipcard--inner">
                            
                            <!-- Front of Card -->
                            <div class="quiz---flipcard--front">
                                <div class="quiz---icon">&#128211;</div>

                                <div class="quiz---content--container">
                                    <p><strong>Question:</strong> What does HTML stand for?</p>
                                </div>
                                    
                                <div class="quiz---feedback--container">
                                    Complete
                                    <a href="#" id="btn_complete" class="btn btn--flip">&nbsp;</a>
                                    <a href="#" class="quizcard---flip--btn">Flip</a>                   
                                </div>
                            </div>

                            <!-- Back of Card -->
                            <div class="quiz---flipcard--back">
                                <div class="quiz---icon">&#9989;</div>

                                <div class="quiz---content--container">
                                    <p><strong>Answer:</strong> HyperText Markup Language</p>
                                    <p>HTML is the standard markup language for creating web pages and web applications.</p>
                                </div>
                                    
                                <div class="quiz---feedback--container">
                                    Complete
                                    <a href="#" id="btn_complete" class="btn btn--flip">&nbsp;</a>
                                    <a href="#" class="quizcard---flip--btn">Flip Back</a>                   
                                </div>
                            </div>

                        </div>

                    </article> 

                    <article class="quiz quiz---code quiz---flipcard">

                        <div class="quiz---flipcard--inner">
                            
                            <!-- Front of Card -->
                            <div class="quiz---flipcard--front">
                                <div class="quiz---icon">&#128211;</div>

                                <div class="quiz---content--container">
                                    <p><strong>Question:</strong> What is the correct syntax for creating a hyperlink?</p>
                                </div>
                                    
                                <div class="quiz---feedback--container">
                                    Complete
                                    <a href="#" id="btn_complete" class="btn btn--flip">&nbsp;</a>
                                    <a href="#" class="quizcard---flip--btn">Flip</a>
                                </div>
                            </div>

                            <!-- Back of Card -->
                            <div class="quiz---flipcard--back">
                                <div class="quiz---icon">&#9989;</div>

                                <div class="quiz---content--container">
                                    <p><strong>Answer:</strong> &lt;a href="url"&gt;Link Text&lt;/a&gt;</p>
                                    <p>The &lt;a&gt; tag defines a hyperlink, and the href attribute specifies the destination URL.</p>
                                </div>
                                    
                                <div class="quiz---feedback--container">
                                    Complete
                                    <a href="#" id="btn_complete" class="btn btn--flip">&nbsp;</a>
                                    <a href="#" class="quizcard---flip--btn">Flip Back</a>
                                </div>
                            </div>

                        </div>

                    </article> 

                    <article class="quiz quiz---code quiz---flipcard">

                        <div class="quiz---flipcard--inner">
                            
                            <!-- Front of Card -->
                            <div class="quiz---flipcard--front">
                                <div class="quiz---icon">&#128211;</div>

                                <div class="quiz---content--container">
                                    <p><strong>Question:</strong> Which HTML tag is used to define an unordered list?</p>
                                </div>
                                    
                                <div class="quiz---feedback--container">
                                    Complete
                                    <a href="#" id="btn_complete" class="btn btn--flip">&nbsp;</a>
                                    <a href="#" class="quizcard---flip--btn">Flip</a>
                                </div>
                            </div>

                            <!-- Back of Card -->
                            <div class="quiz---flipcard--back">
                                <div class="quiz---icon">&#9989;</div>

                                <div class="quiz---content--container">
                                    <p><strong>Answer:</strong> &lt;ul&gt;</p>
                                    <p>The &lt;ul&gt; tag creates an unordered (bulleted) list. List items are defined with &lt;li&gt; tags.</p>
                                </div>
                                    
                                <div class="quiz---feedback--container">
                                    Complete
                                    <a href="#" id="btn_complete" class="btn btn--flip">&nbsp;</a>
                                    <a href="#" class="quizcard---flip--btn">Flip Back</a>
                                </div>
                            </div>

                        </div>

                    </article> 
                    
                    <article class="quiz quiz---code quiz---flipcard">

                        <div class="quiz---flipcard--inner">
                            
                            <!-- Front of Card -->
                            <div class="quiz---flipcard--front">
                                <div class="quiz---icon">&#128211;</div>

                                <div class="quiz---content--container">
                                    <p><strong>Question:</strong> What is the purpose of the &lt;head&gt; element in HTML?</p>
                                </div>
                                    
                                <div class="quiz---feedback--container">
                                    Complete
                                    <a href="#" id="btn_complete" class="btn btn--flip">&nbsp;</a>
                                    <a href="#" class="quizcard---flip--btn">Flip</a>
                                </div>
                            </div>

                            <!-- Back of Card -->
                            <div class="quiz---flipcard--back">
                                <div class="quiz---icon">&#9989;</div>

                                <div class="quiz---content--container">
                                    <p><strong>Answer:</strong> Contains metadata about the HTML document</p>
                                    <p>The &lt;head&gt; element contains meta information like title, scripts, styles, and other metadata that isn't displayed on the page.</p>
                                </div>
                                    
                                <div class="quiz---feedback--container">
                                    Complete
                                    <a href="#" id="btn_complete" class="btn btn--flip">&nbsp;</a>
                                    <a href="#" class="quizcard---flip--btn">Flip Back</a>
                                </div>
                            </div>

                        </div>

                    </article> 

                </article>

            </article>
            
        </section>

    </main>

    <p>quiz.php</p>
  
<?php include "assets/template-parts/footer.php"; ?>