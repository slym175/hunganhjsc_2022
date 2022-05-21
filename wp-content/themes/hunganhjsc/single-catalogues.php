<?php
get_header(); ?>
<div class="">
    <div class="_breadcrumb">
        <div class="container">
            <script async="" src="https://embed.tawk.to/5cd705b32846b90c57ae052f/default" charset="UTF-8"
                crossorigin="*"></script>
            <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "BreadcrumbList",
                    "itemListElement": [{
                            "@type": "ListItem",
                            "position": 1,
                            "name": "✅ Trang chủ",
                            "item": "https://ngocanh.com"
                        },
                        {
                            "@type": "ListItem",
                            "position": 2,
                            "name": "✅ Download Catalogue",
                            "item": "https://ngocanh.com/catalogue"
                        },
                        {
                            "@type": "ListItem",
                            "position": 3,
                            "name": "✅ Catalogue vòng bi SKF",
                            "item": "https://ngocanh.com/catalogue/catalogue-vong-bi-skf"
                        }
                    ]
                }
            </script>

        </div>
    </div>



    <div class="container">

        <h1 style="font-size:20px ;font-weight:700"><?php the_title() ?></h1>


        <br>


        <div style="margin-top: -50px">
            <div class="page-header"></div>
            <div class="download-list row">
                <?php 
                print_r(get_the_ID());
                    print_r(get_field('tai_tai_lieu', get_the_ID()));
                    print_r(get_post_meta(get_the_ID(), 'tai_tai_lieu'));

                ?>
                <div class="item">
                    <div class="inner">
                        <a title="Tải xuống Tài liệu vòng bi tang trống hai dãy tự lựa" target="_blank"
                            href="../download-catalogue/vong-bi-tang-trong-hai-day.pdf" class="btn btn-info"><i
                                class="glyphicon glyphicon-download-alt"></i></a>

                        <h2 class="tt"><a title="Tải xuống Tài liệu vòng bi tang trống hai dãy tự lựa" target="_blank"
                                href="../download-catalogue/vong-bi-tang-trong-hai-day.pdf">Tài liệu vòng bi tang trống
                                hai dãy tự lựa</a></h2>
                        <p></p>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>


    </div>



</div>
<?php get_footer();
?>