<?php
/**
* Template name: Processes page
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php get_header('head') ?>
</head>
<body <?php body_class() ?>>
    <div class="wrapper page-clients">
        <header id="site-header" class="header header-image header-inner header-nocolor">
            <?php get_template_part( 'parts/top-line' ); ?>
        </header>
        <div class="middle nopadding-top" id="middle">
            <div class="container-fluid content-top content-bg">
                <div class="container">
                    <?php while(have_posts()): the_post(); ?>
                    <div class="row">
                        <div class="page-entry col-md-9 col-md-offset-2">
                            <div class="h1 title-bracket"><?= get_the_title(); ?></div>
                            <div class="content"><?= get_the_content() ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-steps-top container">
                <div class="inner-top-steps row">
                    <div class="col-svg"><div class="svg">
                    <?php include get_template_directory() . "/img/svg/top-work-cheme.svg" ?>
                        
                    <img src="<?php echo bloginfo('template_url'); ?>/img/svg/top-work-cheme-100.jpg" alt="cheme step" usemap="#Map-tstep" border="0" class="tstep-img" />
                    <map name="Map-tstep" id="Map-tstep">
                    <area shape="poly" coords="108,-1,318,121,316,125,212,190,2,66,4,61" href="#" data-stept="1" class="tstep-area"  />
                    <area shape="poly" coords="78,114,212,191,243,177,315,217,313,229,211,286,1,163,-1,154" href="#" data-stept="2" class="tstep-area"  />
                    <area shape="poly" coords="76,211,212,287,242,273,317,316,316,321,211,381,1,263,-1,255" href="#" data-stept="3" class="tstep-area"  />
                    <area shape="poly" coords="77,310,210,381,239,368,314,410,317,416,210,480,-2,357,5,349" href="#" data-stept="4" class="tstep-area"  />
                    <area shape="poly" coords="74,405,210,478,240,465,313,509,315,520,211,574,3,457,-2,447" href="#" data-stept="5" class="tstep-area"  />
                    <area shape="poly" coords="80,501,210,576,239,562,317,606,318,612,211,674,4,553,4,542" href="#" data-stept="6" class="tstep-area"  />
                    <area shape="poly" coords="77,601,215,674,240,657,312,701,314,713,213,766,2,646,1,639" href="#" data-stept="7" class="tstep-area"  />
                    </map>
                    </div></div>
                    <div class="col-captions">
                        <div class="tstep tstep-1" data-stept="1">
                            <div class="_ttl">Step 1</div>
                            <div class="_subttl">Pre-contract Analysis</div>
                            <div class="_txt">To identify whether we can help.</div>
                        </div>
                        <div class="tstep tstep-2" data-stept="2">
                            <div class="_ttl">Step 2</div>
                            <div class="_subttl">Project Charter Preparation</div>
                            <div class="_txt">To identify how we can help.</div>
                        </div>
                        <div class="tstep tstep-3" data-stept="3">
                            <div class="_ttl">Step 3</div>
                            <div class="_subttl">Agreement Signing</div>
                            <div class="_txt">To protect rights on both sides.</div>
                        </div>
                        <div class="tstep tstep-4" data-stept="4">
                            <div class="_ttl">Step 4</div>
                            <div class="_subttl">Business Analysis</div>
                            <div class="_txt">To specify software requirements.</div>
                        </div>
                        <div class="tstep tstep-5" data-stept="5">
                            <div class="_ttl">Step 5</div>
                            <div class="_subttl">Team Assignment</div>
                            <div class="_txt">Including the most suitable specialists for each role.</div>
                        </div>
                        <div class="tstep tstep-6" data-stept="6">
                            <div class="_ttl">Step 6</div>
                            <div class="_subttl">Project Implementation</div>
                            <div class="_txt">Provision of Agile-based software development.</div>
                        </div>
                        <div class="tstep tstep-7" data-stept="7">
                            <div class="_ttl">Step 7</div>
                            <div class="_subttl">Product Release & Support</div>
                            <div class="_txt">Deployment & maintenance of the system.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid content-top content-bg">
                <div class="container">
                    <div class="row">
                        <div class="page-entry col-md-9 col-md-offset-2">
                            <div class="h1 title-bracket">Engagement Models</div>
                            <div class="content">
                                <?php the_field('engagement_models') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="proc-property row">
                    <div class="media col-md-8 col-md-offset-2">
                      <div class="media-left">
                          <img class="media-object" src="<?php echo bloginfo('template_url'); ?>/img/svg/proc-1.svg" alt="..." width="142" height="142">
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">Project-Based Model</h4>
                        <div class="p3"><p>Best suited to projects with a well-defined scope and clear delivery timelines, this model allows clients to focus on the results of software development but not the processes underlying it. Combining Agile-based methodologies allows us to provide the best development process while remaining flexible in changing requirements.</p></div>
                      </div>
                    </div>
                    <div class="media col-md-8 col-md-offset-2">
                      <div class="media-left">
                          <img class="media-object" src="<?php echo bloginfo('template_url'); ?>/img/svg/proc-2.svg" alt="..." width="142" height="142">
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">Dedicated Team Model</h4>
                        <div class="p3"><p>Best suited to long-term projects with a constant flow of change requests, multiple milestones, and changes in priorities based on current business needs, this model gives clients complete control over team building and management, and access to our infrastructure, and developers’ technology and domain expertise.</p></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid content-top content-bg">
                <div class="container">
                    <div class="row">
                        <div class="page-entry col-md-9 col-md-offset-2">
                            <div class="h1 title-bracket">Talent Pipeline</div>
                            <div class="content">
                                <?php the_field('talent_pipeline') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="block-proc-steps container">
                <div class="steps-inner row">
                    <div class="steps-svg col-md-5 col-md-offset-1">
                        <div id="bottom-work-steps" class="static">
                            <?php //include get_template_directory() . "/img/svg/work-bottom-cheme.svg" ?>
                            <img src="<?php echo bloginfo('template_url'); ?>/img/svg/work-bottom-cheme.svg" class="img-bstep" alt="" width="480" height="875" usemap="#Map-steps-work-bottom" border="0" />
                            <img src="<?php echo bloginfo('template_url'); ?>/img/svg/work-bottom-cheme-1.svg" class="img-bstep-1" alt="" border="0" usemap="#Map-steps-work-bottom" />
                            <img src="<?php echo bloginfo('template_url'); ?>/img/svg/work-bottom-cheme-2.svg" class="img-bstep-2" alt="" border="0" usemap="#Map-steps-work-bottom" />
                            <img src="<?php echo bloginfo('template_url'); ?>/img/svg/work-bottom-cheme-3.svg" class="img-bstep-3" alt="" border="0" usemap="#Map-steps-work-bottom" />
                            <img src="<?php echo bloginfo('template_url'); ?>/img/svg/work-bottom-cheme-4.svg" class="img-bstep-4" alt="" border="0" usemap="#Map-steps-work-bottom" />
                            <img src="<?php echo bloginfo('template_url'); ?>/img/svg/work-bottom-cheme-5.svg" class="img-bstep-5" alt="" border="0" usemap="#Map-steps-work-bottom" />
                                <map name="Map-steps-work-bottom" id="Map-steps-work-bottom">
                                    <area shape="poly" class="bsteps-area" data-bstep="1" coords="239,0,474,139,475,240,239,386,3,241,1,141" href="#" />
                                    <area shape="poly" class="bsteps-area" data-bstep="2" coords="56,279,238,389,423,280,421,373,238,482,59,376" href="#" />
                                    <area shape="poly" class="bsteps-area" data-bstep="3" coords="103,405,238,485,381,401,382,524,238,609,97,527" href="#" />
                                    <area shape="poly" class="bsteps-area" data-bstep="4" coords="132,553,240,611,346,548,351,677,241,735,132,679" href="#" />
                                    <area shape="poly" class="bsteps-area" data-bstep="5" coords="169,703,239,735,315,702,312,832,239,874,167,836" href="#" />
                                </map>
                        </div>
                    
                    </div>
                    <div class="steps-items col-md-5">
                        <div class="step-item bstep-item caption-bstep-1" data-bstep="1">
                            <div class="_ttl"><span>Step 1</span><br>Soft Skills & Language</div>
                            <div class="_txt">We probe the inner depths of candidates’ personality traits and soft skills, in order to find passionate and driven individuals who are hands-on and fully engaged in their work. They must be strong communicators who are able to read, write, and speak English extremely well.</div>
                        </div>
                        <div class="step-item bstep-item caption-bstep-2" data-bstep="2">
                            <div class="_ttl"><span>Step 2</span><br>Technical Interview</div>
                            <div class="_txt">Next, we assess candidates’ technical knowledge, problem-solving ability, and intellect through a technical interview with our experts. We usually only accept candidates who achieve exceptional results in this stage.</div>
                        </div>
                        <div class="step-item bstep-item caption-bstep-3" data-bstep="3">
                            <div class="_ttl"><span>Step 3</span><br>Client Screening</div>
                            <div class="_txt">We offer our clients the opportunity to conduct an interview with each candidate for their long-term, dedicated team. This enables them to verify not only the candidates’ technical skills, but also their business domain expertise and whether they are a good fit for the whole team.</div>
                        </div>
                        <div class="step-item bstep-item caption-bstep-4" data-bstep="4">
                            <div class="_ttl"><span>Step 4</span><br>Trial Period</div>
                            <div class="_txt">Every candidate is initially assigned to their team for a three-month trial period, during which their performance is evaluated. In order to proceed beyond the trial period, candidates must demonstrate their competence, professionalism, and integrity, and deliver initial results according to the set criteria.</div>
                        </div>
                        <div class="step-item bstep-item caption-bstep-5" data-bstep="5">
                            <div class="_ttl"><span>Step 5</span><br>Continued Excellence</div>
                            <div class="_txt">INSARTers are expected to be long-term team players. We help our people grow during their entire journey with us, and they repay this by delivering exceptional results for our clients.</div>
                        </div>
                    </div>
                </div>
            </div> <!-- .block-proc-steps -->
            <?php endwhile; ?>
            <div class="block-clients full-height flexbox flex-wrap">
        <?php $clients = get_posts('post_type=client&numberposts=-1&orderby=menu_order&order=asc');
                // print_r($clients);
                 ?>
            <div class="slider-clients">
                <?php foreach($clients as $client):
                // $cl_meta = get_metadata('post', $client->ID, '',1); ?>
                <!-- <pre><?php //print_r( get_field(  'baner',$client->ID )) ?></pre> -->
                <div class="slide-item">
                    <div class="cl-logo">
                        <?php if(!get_field('hide_client_logo', $client->ID)): ?>
                            <?= get_post_meta( $client->ID, 'logo_svg', 1 ) ; ?>
                            <?php endif; ?>
                        </div>
                    <div class="container flexbox flex-wrap">
                        <div class="text-center _slide-inner">
                            <div class="h1 _title"><?= get_post_meta( $client->ID, 'caption', 1 ); ?></div>
                            <div class="slde-bottom-wrap">
                                <div class="_descr"><p><?= get_post_meta( $client->ID, 'baner_entry', 1 ); ?></p></div>
                            </div>
                        </div>
                    </div>
                    <?php if(get_field('show_case', $client->ID)): ?>
                        <div class="_more text-center"><a href="<?= get_permalink($client->ID); ?>" class="btn btn-warning btn-sm">LEARN MORE</a></div>
                        <?php endif; ?>
                    <?php $img = get_field(  'baner',$client->ID ); ?>
                        <div class="bg-slide" style="background-image: url('<?php echo $img['sizes']['img_big']  ?>"><div class="bg-mask"></div></div>
                </div>
                <?php endforeach; ?>
            </div>
                <div class="arrows-container"></div>
        </div>
        <div class="block-testimonials-home">
            <div class="container">
            <?php $reviews = get_posts('post_type=review&numberposts=-1'); ?>
                <div class="h2 title-block text-center">Testimonials</div>
                <div class="block-testimonials-container">
                    <div class="testimonials-slider dots-yellow">
                        <?php foreach($reviews as $review): ?>
                            <div class="item-testimnial">
                                <div class="_photo text-center"><?php echo get_the_post_thumbnail($review->ID, 'img_278_278', array('class'=>'img-circle')); ?></div>
                                <div class="_name"><?php echo $review->post_title ?></div>
                                <div class="_post-human"><?php echo get_field('post', $review->ID) ?></div>
                                <div class="_entry p1"><?php echo $review->post_excerpt ?></div>
                                <div class="social-links">
                                <?php if(get_field('b_link', $review->ID)): ?>
                                    <a href="<?= get_field('b_link', $review->ID) ?>" target="_blank"><i class="icon-soc ic-fb"><?php //include __DIR__ . "/img/svg/ic-fb.svg" ?></i></a>
                                <?php endif; ?>
                                <?php if(get_field('in_link', $review->ID)): ?>
                                    <a href="<?= get_field('in_link', $review->ID) ?>" target="_blank"><i class="icon-soc ic-in"><?php //include __DIR__ . "/img/svg/ic-in.svg" ?></i></a>
                                <?php endif; ?>
                                <?php if(get_field('twiter_link', $review->ID)): ?>
                                    <a href="<?= get_field('twiter_link', $review->ID) ?>" target="_blank"><i class="icon-soc ic-twit"><?php //include __DIR__ . "/img/svg/ic-twit.svg" ?></i></a>
                                <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div> <!-- .block-testimonials-home -->
        <?php get_template_part( 'parts/bottom-block' ); ?>

        <?php $insights = get_posts('cat=1') ?>
                <div class="block-insights-home">
                    <div class="container">
                        <div class="h1 title-block text-center">Latest Insights</div>
                        <div class="insights-container container">
                            <div class="slider-insights dots-yellow">
                            <?php foreach($insights as $insight): ?>
                                <div class="_item-post">
                                    <div class="_inner">
                                        <figure><a href="<?php echo get_permalink($insight->ID); ?>"><?php echo get_the_post_thumbnail($insight->ID,  array(376, 215), array('class'=>'img-border img-thumbnail')); ?></a></figure>
                                        <div class="_title h5"><a href="<?php echo get_permalink($insight->ID); ?>"><?php echo $insight->post_title; ?></a></div>
                                        <div class="_date"><?php echo get_the_date('M.d.Y', $insight->ID) ?></div>
                                        <div class="_entry"><?php echo get_the_excerpt($insight->ID); ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div> <!-- .block-insights-Java -->
        </div> <!-- #middle -->
    </div>
    <?php get_footer(); ?>
</body>
</html>

