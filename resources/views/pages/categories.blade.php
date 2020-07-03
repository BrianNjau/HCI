


<h1>{{$title}}</h1>

 <header><!-- Defining the header section of the page -->
    <nav><!-- Defining the navigation menu -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>
        
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            You are logged in!
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul>
           
            <li><a href="#">Specials</a></li>
            <li><a href="#">All Products</a></li>
            <li><a href="http://localhost/gates/public/about">ABOUT</a></li>
        </ul>
    </nav>
    <div class="top_head"><!-- Defining the top head element -->
        <div class="logo"><!-- Defining the logo element -->
                
                
            </a>
        </div>
        <section id="search"><!-- Search form -->
            <form action="#" onsubmit="return false;" method="get">
                <input type="text" onfocus="if (this.value =='Search..' ) this.value=''" onblur="if (this.value=='') this.value='Search..'" value="Search.." name="q">
                <input type="submit" value="Search">
            </form>
            <ul id="social"><!-- Social profiles links -->
                <li><a href="#" title="facebook" rel="external nofollow"><img alt="" src=""></a></li>
                <li><a href="#" title="twitter" rel="external nofollow"><img alt="" src="images/twitter.png"></a></li>
                <li><a href="#" title="Instagram" rel="external nofollow"><img alt="" src="images/linkedin.png"></a></li>
                <li><a href="#" title="rss" rel="external nofollow"><img alt="" src="images/rss.png"></a></li>
            </ul>
        </section>
    </div>
    <section id="submenu"><!-- Defining the sub menu -->
        <ul>
            <li><a href="#">NEW</a></li>
            <li><a href="#">MODERN GATES</a></li>   
            <li><a href="#">ELECTRONIC GATES</a></li>
            <li><a href="#">WOODEN GATES</a></li>
            <li><a href="#">SLIDING GATES</a></li>
            <li><a href="#">STEEL GATES</a></li>
            <li><a href="#">FOLD GATES</a></li>
            <li><a href="#">WROUGHT IRON</a></li>
            <li><a href="#">DRIVEWAY GATES</a></li>
        </ul>
    </section>
</header>

<div id="slider"><!-- Defining the main content section -->
    <!-- Promo slider -->
        <section id="slider-wrapper">
            <div id="slider" class="nivoSlider">
                <img style="display: float;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScs0ImT1fFbQCkilG4alHC6xVSttqzBrcWFwMfWjGPNDaiHDdv&usqp=CAU" alt="" title="Sliding gates">
                <img style="display: float;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcShQ8o11bFo_3sbZP6udjNN03MDme3pJjbuYX7tefx3yW5-FoNR&usqp=CAU" alt="" title="Modern gates">
                <img style="display: float;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR3s22462RMqw-K1j8Y56f-lNH6qN74lyRirSSnUO6tcNFJx7d6&usqp=CAU" alt="" title="Driveway gates">
                <img style="display: float;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTdoiP2D4AzsXq_8_oE3dEcrF5EU59y8hWmy0HiNQ0N8XiIKNWw&usqp=CAU" alt="" title="Fold gates">
                <img style="display: float;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRvFX6RFehfEKk4pR36n8WFmRxQH_4qq11JCz2ULo9sOXTuSKWE&usqp=CAU" alt="" title="Wrought Iron">
               
            </div>
            <div id="htmlcaption-1" class="nivo-html-caption">
                <h5 class="p2"></h5>
                <p>No Quality Gate like from GetGate</p>
            </div>
            <div id="htmlcaption-1" class="nivo-html-caption">
                <h5 class="p2">Discounted items(LIMITED OFFER)</h5>
                <p>Get quality at a lower cost on TOP SELLS</p>
            </div>
           
        </section>
    </div>
    <div id="main"><!-- Defining submain content section -->
        <section id="content"><!-- Defining the content section #2 -->
            <div id="left">
                <h3>Last products</h3>
                <ul>
                    <li>
                        <div class="img"><a href="#"><img alt="" src=" https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR3O9wjf38WGgUZ-uIKUxetGi6O_Lvj0oVar2mEKp_kEhfl_pVj&usqp=CAU"></a></div>
                        <div class="info">
                            <a class="title" href="#">IRON GATE</a>
                            <p>Iron royal gate with a carvature top suiable for backyard enterances</p>
                            <div class="price">
                                <span class="st">Our price:</span><strong>$550.00</strong>
                            </div>
                            <div class="actions">
                                <a href="#">Details</a>
                                
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img"><a href="#"><img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRElFGh6R_q3TV5nU0dJjh5EZCnARIRa6fsYPSxflAdtUGicWiG&usqp=CAU"></a></div>
                        <div class="info">
                            <a class="title" href="#">Ornamental Gate</a>
                            <p>Gates built specificall for beauty</p>
                            <div class="price">
                                <span class="st">Our price:</span><strong>$750.00</strong>
                            </div>
                            <div class="actions">
                                <a href="#">Details</a>
                                
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img"><a href="#"><img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTBHBztbZh-AAWdQjYVUrvBgBeFpDGvp8FCcJB48q3ZS0d7bONW&usqp=CAU"></a></div>
                        <div class="info">
                            <a class="title" href="#">SHUTTER DOOR</a>
                            <p>Minature gates just to enhance security level at a particular point</p>
                            <div class="price">
                                <span class="st">Our price:</span><strong>$350.00</strong>
                            </div>
                            <div class="actions">
                                <a href="#">Details</a>
                                
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img"><a href="#"><img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRTAzwfNZViwcBQ30_rLedvC4BeuruErTGE44q4k9JEz1XfPF8x&usqp=CAU"></a></div>
                        <div class="info">
                            <a class="title" href="#">Sliding Gate</a>
                            <p>Modern sliding gate installed with or witthout a motar for remote access</p>
                            <div class="price">
                                <span class="st">Our price:</span><strong>$658.00</strong>
                            </div>
                            <div class="actions">
                                <a href="#">Details</a>
                                
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img"><a href="#"><img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT90-bZMV4PQ_oKZ81oC5xuBLKp_igHSiOCsO1qNHVmQ48z_Rpp&usqp=CAU"></a></div>
                        <div class="info">
                            <a class="title" href="#">Stainless Steel</a>
                            <p>The new advanced Stainless steel gate</p>
                            <div class="price">
                                <span class="st">Our price:</span><strong>$1290.00</strong>
                            </div>
                            <div class="actions">
                                <a href="#">Details</a>
                                
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img"><a href="#"><img alt="" src="data:image/jpeg;base64,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"></a></div>
                        <div class="info">
                            <a class="title" href="#">Wooden Gate</a>
                            <p>Hard wood Gates that are a beauty and secure</p>
                            <div class="price">
                                <span class="st">Our price:</span><strong>$350.00</strong>
                            </div>
                            <div class="actions">
                                <a href="#">Details</a>
                                
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="right">
                <h3>Top sells</h3>
                <ul>
                    <li>
                        <div class="img"><a href="#"><img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQd1IKB4UsMEIa-TiTnGd4uUBLpURAU1mawJUaNgVFZjlwWP0yW&usqp=CAU"></a></div>
                        <div class="info">
                            <a class="title" href="#">DRIVEWAY GATE</a>
                            <div class="price">
                                <span class="usual">$600.00 </span>&nbsp;
                                <span class="special">$500.00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img"><a href="#"><img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQqI4K0nYt1NKNNx4HxiddvEAaNc8zr22hvHmcoMG_DgDgDf0Uw&usqp=CAU"></a></div>
                        <div class="info">
                            <a class="title" href="#">Baby safety Gate</a>
                            <div class="price">
                                <span class="usual">$270.00 </span>&nbsp;
                                <span class="special">$150.00</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img"><a href="#"><img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ5TBvg3olkbex3OHSlf594UycRQtfY_HRkGC-wYrTvnyxkyZg5&usqp=CAU"></a></div>
                        <div class="info">
                            <a class="title" href="#">Portable Bar Gates</a>
                            <div class="price">
                                <span class="usual">$700.00 </span>&nbsp;
                                <span class="special">$600.25</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img"><a href="#"><img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSPg_KtobFd4GyjlO3pgvr3Va2NDfuSWwGI97fpBw8FR8SuKML1&usqp=CAU"></a></div>
                        <div class="info">
                            <a class="title" href="#">Exclusive Sliding Remote Gate</a>
                            <div class="price">
                                <span class="usual">$805.00 </span>&nbsp;
                                <span class="special">$714.25</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img"><a href="#"><img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR7sWvf8IwtvxK1_GevsDg7namNn-RZozhZ_9rdtNagClOzl7Fg&usqp=CAU"></a></div>
                        <div class="info">
                            <a class="title" href="#">Majestic DriveInn</a>
                            <div class="price">
                                <span class="usual">$1205.00 </span>&nbsp;
                                <span class="special">$1000.25</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img"><a href="#"><img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRJdasVNxwtNge5CMBnWGWOD00nfK9L8TAgiQncRSXT16FCPHJo&usqp=CAU"></a></div>
                        <div class="info">
                            <a class="title" href="#">Fireplace Grill</a>
                            <div class="price">
                                <span class="usual">$177.00 </span>&nbsp;
                                <span class="special">$90.25</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    
    @endsection
