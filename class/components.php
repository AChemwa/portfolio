<?php
class PageLayout{
    static function PageHeader(){
        echo 
        '
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>
        <link rel="stylesheet" href="../css/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        </head>
        <body>
        ' . 
        PageLayout::PageNav();
    }
    static function PageNav(){
        echo
        '
        <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/skills">SKILLS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projects">PROJECTS</a>
                </li>
        </ul>
        ';
    }
    static function PageFooter(){
        echo 
        '
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
        </body>
        </html>
        ';
    }
}

class HomePage{
    static function HomePage(){
        echo 
            PageLayout::PageHeader() . 
        '
        <div class="container-fluid">
            <div class="container">
                <img src="../css/portfolio.png" class="rounded mx-auto d-block" alt="web developer">
                
            </div>
        </div>
        '
        .   PageLayout::PageFooter()  ;
    }
}

class AboutPage{
    static function AboutPage(){
        echo
        PageLayout::PageHeader() . 
        '
        <div class="container-fluid">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                            ABOUT
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">ANDREW CHEMWA</h5>
                        <p class="card-text">Web Developer</p>
                        <a href="/skills" class="btn btn-primary">SKILLS</a>
                    </div>
                </div>
            </div>
        </div>
        '
        . PageLayout::PageFooter();
    }
}

class SkillsPage{
    static function SkillsPage(){
        echo
        PageLayout::PageHeader() .
        '
        <div class="container-fluid">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                            SKILLLS
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">TECH SKILLS</h5>
                        <p class="card-text">OS: LINUX <br> LANGUAGES: PHP, HTML, CSS, JAVA, C++ <br> FRAMEWORKS: BOOTSTRAP, F3 FRAMEWORK <br>
                                            DATABASE: MySQL, MariaDB, Postgresql <br>  
                        </p>
                        <a href="/projects" class="btn btn-primary">PROJECTS</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">SOFT SKILLS</h5>
                        <p class="card-text">LEADERSHIP <br> COMMUNICATION <br> TEAMWORK</p>
                    </div>
                </div>
            </div>
        </div>
        ' .
        PageLayout::PageFooter();
    }
}

class ProjectsPage{
    static function ProjectsPage(){
        echo
        PageLayout::PageHeader() .
        '
        <div class="container-fluid">
            <div class="container">
                <div class="card">
                    <h5 class="card-header">PROJECTS</h5>
                    <div class="card-body">
                        <h5 class="card-title">RECENT PROJECTS</h5>
                        <p class="card-text">
                                <ol>
                                    <li>PORTFOLIO WEBSITE</li>
                                </ol><br> 
                                MORE PROJECTS ON THE WAY...
                            </p>
                        <a href="https://github.com/AChemwa" class="btn btn-primary">GitHub Profile</a>
                    </div>
                </div>
            </div>
        </div>    
        '
        . PageLayout::PageFooter();
    }
}