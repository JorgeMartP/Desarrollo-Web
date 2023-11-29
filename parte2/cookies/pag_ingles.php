<!DOCTYPE html>
<html lang="en">

<head>
    <title>DOM</title>
    <link rel="stylesheet" href="style/stylePag.css" type="text/css" media="screen" />
</head>

<body>

    <header>
        <h1>The Flower Blog</h1>
    </header>
    <nav>
        <ul>
            <li class="selected"><a href="#">Blog</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Archives</a></li>
            <li><a href="#">Contact</a></li>
            <li class="subscribe"><a href="#">Subscribe via RSS</a></li>
        </ul>
    </nav>
    <section id="intro">
        <header>
            <h2>Do you love flowers as much as we do?</h2>
        </header>
        <p>A flower is the characteristic reproductive structure of plants called spermatophytes or angiosperms. The function of a flower is to produce seeds through sexual reproduction. For plants, seeds are the next generation and serve as the primary means through which species perpetuate and spread.</p>
        <img src="img/intro_flower.png" alt="Flower" />
    </section>
    <div id="content">
        <div id="mainContent">
            <section>
                <article class="blogPost">
                    <header>
                        <h2>FLOWER PRODUCTION</h2>
                        <p>Published on <time datetime="2020-06-29T23:31+01:00">June 29th, 2020</time> by <a href="#">Mads Kjaer</a> - <a href="#comments">3 comments</a></p>
                    </header>
                    <div>
                        <p>All spermatophytes have flowers that will produce seeds, but the internal organization of the flower is very different in the two main groups of spermatophytes: the living gymnosperms and angiosperms. Gymnosperms can have flowers that gather in strobili, or the flower itself can be a strobilus of fertile leaves. On the other hand, a typical angiosperm flower is composed of four types of structurally and physiologically modified leaves to produce and protect gametes. These modified leaves or floral organs are sepals, petals, stamens, and carpels. Additionally, in angiosperms, the flower gives rise, after fertilization and by the transformation of some of its parts, to a fruit containing the seeds.</p>

                        <img src="img/flower.png" alt="Flower" />

                        <p>The angiosperm group, with over 250,000 species, is an evolutionarily successful lineage that forms the majority of the existing terrestrial flora. The angiosperm flower is the defining character of the group and is likely a key factor in its evolutionary success. It is a complex structure, whose organizational plan is conserved in almost all members of the group, although there is tremendous diversity in the morphology and physiology of each of its components. The genetic and adaptive basis of such diversity is beginning to be understood in depth, as well as its origin, dating back to the Early Cretaceous, and its subsequent evolution in close interrelation with animals responsible for transporting gametes.</p>

                        <p>The flower is a short stem of determined growth carrying structurally and functionally modified leaves for the functions of gamete production and protection, called floral organs. The stem is characterized by indeterminate growth. In contrast, the flower shows determined growth, as its apical meristem ceases to divide mitotically after it has produced all the floral organs or pieces. More specialized flowers have a shorter growth period and produce a shorter axis and a more defined number of floral pieces than more primitive flowers. The arrangement of the floral organs on the axis, the presence or absence of one or more floral pieces, the size, pigmentation, and relative arrangement of the floral pieces are responsible for the existence of a great variety of flower types.</p>
                    </div>
                </article>
            </section>
            <section id="comments">
                <h3>Comments</h3>
                <article>
                    <header>
                        <a href="#">Cristina Bugman</a> on <time datetime="2020-06-29T23:35:20+01:00">June 29th, 2020 at 23:35</time>
                    </header>
                    <p>I love flowers, and I think all the information you share on your blog is fantastic.</p>
                </article>
                <article>
                    <header>
                        <a href="#">Monica Giraldo</a> on <time datetime="2020-06-29T23:40:09+01:00">June 29th, 2020 at 23:40</time>
                    </header>
                    <p>How can I make my roses, when planted, generate a strong root?</p>
                </article>
                <article>
                    <header>
                        <a href="#">Susana Garcia</a> on <time datetime="2020-06-29T23:59:00+01:00">June 29th, 2020 at 23:59</time>
                    </header>
                    <p>I have a large flower cultivation, and I have applied each of your recommendations. Thank you for helping us floriculturists improve our products.</p>
                </article>
            </section>
            <form action="#" method="post">
                <h3>Post a Comment</h3>
                <p>
                    <label for="name">Name</label>
                    <input name="name" id="name" type="text" required />
                </p>
                <p>
                    <label for="email">Email</label>
                    <input name="email" id="email" type="email" required />
                </p>
                <p>
                    <label for="website">Website</label>
                    <input name="website" id="website" type="url" />
                </p>
                <p>
                    <label for="comment">Comment</label>
                    <textarea name="comment" id="comment" required></textarea>
                </p>
                <p><input type="submit" value="Post comment" /></p>
            </form>
        </div>
        <aside>
            <section>
                <header>
                    <h3>Categories</h3>
                </header>
                <ul>
                    <li><a href="#">Roses</a></li>
                    <li><a href="#">Tulips</a></li>
                    <li><a href="#">Daisies</a></li>
                </ul>
            </section>
            <section>
                <header>
                    <h3>Archives</h3>
                </header>
                <ul>
                    <li><a href="#">December 2008</a></li>
                    <li><a href="#">January 2009</a></li>
                    <li><a href="#">February 2009</a></li>
                    <li><a href="#">March 2009</a></li>
                    <li><a href="#">April 2009</a></li>
                    <li><a href="#">May 2009</a></li>
                    <li><a href="#">June 2009</a></li>
                </ul>
            </section>
        </aside>
    </div>
    <footer>
        <div>
            <section id="about">
                <header>
                    <h3>About</h3>
                </header>
                <p>Urban flower cultivation <a href="#">https://www.planteaenverde.es/blog/flores-en-el-huerto/</a> Adapting urban areas to accommodate and promote biodiversity is a necessary challenge if we want to mitigate the continuous disappearance of hundreds of species.</p>
            </section>
            <section id="blogroll">
                <header>
                    <h3>Blogroll</h3>
                </header>
                <ul>
                    <li><a href="#">NETTUTS+</a></li>
                    <li><a href="#">FreelanceSwitch</a></li>
                    <li><a href="#">In The Woods</a></li>
                    <li><a href="#">Netsetter</a></li>
                    <li><a href="#">PSDTUTS+</a></li>
                </ul>
            </section>
            <section id="popular">
                header>
                    <h3>Popular</h3>
                </header>
                <ul>
                    <li><a href="#">Best environmental conditions</a></li>
                    <li><a href="#">The world and flowers</a></li>
                    <li><a href="#">Bees and pollination</a></li>
                    <li><a href="#">Reducing ecological footprint</a></li>
                </ul>
            </section>
        </div>
    </footer>

</body>

</html>
