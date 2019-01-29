<?php get_header(); ?>
<!-- BEGIN WP CONTENT -->

<section id="maininfo" class="ok"> <!--Here I use the class="ok" for the scrolling button code-->  
            
            <div id="navbar">
                <!-- <div id="logo">
                    <img src="images/iconologo2finalsombra.png" alt="Paul Vargas Logo" width="60" height="58">
                </div> -->
                <nav>
                    <!-- <ul>
                        <li><a href="#aboutmesection">About</a></li>
                        <li><a href="#skillssection">Skills</a></li>
                        <li><a href="#projectssection">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>      
                    </ul> -->
                    <?php wp_nav_menu(); ?>
                </nav>
            </div>

        <section id="aboutmesection">
            <h1>About Me</h1>
            <div id="about">

                <div id="imgabout">
                    <img src=<?php echo get_theme_file_uri('/images/Paul1_CircleOrange.png'); ?> alt="Paul Vargas | Web Developer" width="285" height="285">
                </div>

                <div id="textabout"> 
                    <p>My name is Paul Vargas. I am a web developer.</p>
                    <p>Passionate about the web and its technologies.</p>
                    <p>I focus on generating real value through my work.</p> 
                </div>
            
                <div id="values">
                    <figure>
                    <img src=<?php echo get_theme_file_uri('/images/integrity2.png'); ?> alt="Integrity" width="100" height="100">
                    <figcaption>Integrity</figcaption>
                    </figure>
                    <figure>
                        <img src=<?php echo get_theme_file_uri('/images/responsibility2.png'); ?> alt="Responsibility" width="100" height="100">
                        <figcaption>Responsibility</figcaption>
                    </figure>                     
                    <figure>
                        <img src=<?php echo get_theme_file_uri('/images/collaboration2.png'); ?> alt="Collaboration" width="100" height="100">
                        <figcaption>Collaboration</figcaption>
                    </figure>
                    <figure>
                        <img src=<?php echo get_theme_file_uri('/images/growth2.png'); ?> alt="Growth" width="100" height="100">
                        <figcaption>Learning</figcaption>
                    </figure>
                    <figure>
                        <img src=<?php echo get_theme_file_uri('/images/workhard2.png'); ?> alt="Work Hard" width="100" height="100">    
                        <figcaption>Hard Work</figcaption>
                    </figure>
                    <figure>
                        <img src=<?php echo get_theme_file_uri('/images/worksmart2.png'); ?> alt="Work Smart" width="100" height="100">
                        <figcaption>Smart Work</figcaption>
                    </figure>
                    <figure>
                        <img src=<?php echo get_theme_file_uri('/images/positivity2.png'); ?> alt="Positivity" width="100" height="100">
                        <figcaption>Positivity</figcaption>
                    </figure>
                </div>

            </div>    
        </section>

        <section id="skillssection">
            <div class="menupoint"></div>
            <h1>Skills</h1>
            <p>Since learnig is one of my core values, I keep developing my skills constantly to become a better web developer.</p>
            <p>These are my technical skills at the moment:</p>
            <figure>
                <img src=<?php echo get_theme_file_uri('/images/wdskills1118.png'); ?> alt="Positivity" width="900" height="500">
            </figure>
        </section>

        <section id="projectssection">
            <h1>Projects</h1>
            <p>Some projects that I've been working on lately:</p>
            <div class="portfolio">
                <figure>
                    <a href="/images/PaulVargasWebsite.png" data-lightbox="project1" data-title="Paul Vargas' Portfolio Website.<a href='http://vargasdev.com' target='_blank'> See Website </a> | <a href='https://github.com/PaulVargasDev/paulvargaswebsite' target='_blank'> See Code </a>"><img src=<?php echo get_theme_file_uri('/images/PaulVargasWebsiteThumb.png'); ?> alt="Paul Vargas" width="300" height="300"></a>
                    <figcaption>Portfolio Website</figcaption>
                </figure>
                <figure>
                    <a href="images/ClubProBol.png" data-lightbox="project2" data-title="WordPress Multisite with Membership, E-commerce, Forums & Blog. <a href='http://clubprofesionalesbolivianos.com' target='_blank'> See Website </a>"><img src=<?php echo get_theme_file_uri('/images/ClubProBolThumb.png'); ?> alt="WordPress Multisite with Membership, E-commerce, Forums & Blog" width="300" height="300"></a>
                    <figcaption>WordPress Multisite</figcaption>
                </figure>                     
                <figure>
                    <a href="images/chatappfull.png" data-lightbox="project3" data-title="Complete Functional Chat Application Made with React.js and Node.js. To be deployed soon."><img src=<?php echo get_theme_file_uri('/images/chatapp_thumb.png'); ?> alt="Functional Chat Application Made with React and Node" width="300" height="300"></a>
                    <figcaption>React Chat Application</figcaption>
                </figure>
                <figure>
                    <a href="images/smartbrainappfull.png" data-lightbox="project4" data-title="Image Recognition App. To be deployed soon."><img src=<?php echo get_theme_file_uri('/images/smartbrainappfull_thumb.png'); ?> alt="Image Recognition App." width="300" height="300"></a>
                    <figcaption>Image Recognition App</figcaption>
                </figure>
            </div>
        </section>

        <section id="opensourcesection">
            <h1>Open Source Projects</h1>
            <p>Communities and Open source projects I contribute to at this moment:</p>
            <div class="portfolio">
                <figure>
                    <a href="https://github.com/zero-to-mastery" target="_blank"><img src=<?php echo get_theme_file_uri('/images/zeroToMastery.png'); ?> alt="Zero to Mastery Open Source Porjects" width="200" height="200"></a>
                    <figcaption>Zero to Mastery Community</figcaption>
                </figure>
                <!-- Uncomment the following in the future -->
                <!-- <figure>
                    <a href="https://github.com/exercism/exercism" target="_blank"><img src="images/exercism.png" alt="Exercism - Open Source Porject" width="200" height="200"></a>
                    <figcaption>Exercism</figcaption>
                </figure>                     
                <figure>
                    <a href="https://github.com/hoodiehq/hoodie" target="_blank"><img src="images/hoodie.png" alt="Hoodie - Open Source Porject" width="200" height="200"></a>
                    <figcaption>Hoodie</figcaption>
                </figure> -->
            </div>
        </section>

        <section id="contact">
        <h1>Let's Get In Touch!</h1>
            <div id="contactbutton">
                <a href="mailto:paulvargasdev@gmail.com"><button type="button" class="button">paulvargasdev@gmail.com</button></a>
            </div>
            <div id="social">
                <a href="https://www.linkedin.com/in/pablovargas/" target="_blank"><img src=<?php echo get_theme_file_uri('/images/linkedin.png'); ?> alt="LinkedIn" width="" height=""></a>
                <a href="https://angel.co/paul-vargas" target="_blank"><img src=<?php echo get_theme_file_uri('/images/angellist.png'); ?> alt="AngelList" width="" height=""></a>
                <a href="https://github.com/PaulVargasDev" target="_blank"><img src=<?php echo get_theme_file_uri('/images/Github-Free-PNG-Image.png'); ?> alt="GitHub" width="" height=""></a>
                <a href="https://stackoverflow.com/users/story/8809106" target="_blank"><img src=<?php echo get_theme_file_uri('/images/stackoverflow.png'); ?> alt="StackOverflow" width="" height=""></a>
            </div>
        </section>
    </section>
<!-- END WP CONTENT -->
<?php get_footer(); ?>
<?php wp_footer(); ?>
<!-- <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script> -->
    <script>
        // particlesJS.load('particles-js', '/scripts/particlesjs-config.json', function(){
        //     console.log(`particles.json loaded`);
        // });
    </script>
    <!-- <script src="/scripts/main.js"></script>
    <script src="/scripts/lightbox.min.js"></script> -->
</body>
</html>