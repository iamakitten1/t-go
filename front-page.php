<?php
get_header(); ?>

<!-- FIRST SECTION  -->
<?php
$first_section_title = get_field('first_section_title');
$first_section_text = get_field('first_section_text');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
$background_image = get_field('background_image');
$second_section_title = get_field('second_section_title');
?>

<section class="first-section">
    <div class="container">
        <h2><?php echo $first_section_title; ?></h2>
        <p><?php echo $first_section_text; ?></p>
        <a href="<?php echo $button_link; ?>" class="btn"><?php echo $button_text; ?></a>
    </div>
    
</section>

<!-- SECOND SECTION  -->
<?php
$second_section_title = get_field('second_section_title');
$second_section_cards = get_field('second_section_cards');
$template_uri = get_template_directory_uri(); 
?>

<section class="second-section">
    <div class="second-container">
        <h2><?php echo $second_section_title; ?></h2>

        <div class="cards">
        <?php
        if ($second_section_cards) {
            
            foreach ($second_section_cards as $card) {
                
                echo "<div class='card'>";
                
                // Loop through each section of the card (21, 22, 23)
                for ($i = 21; $i <= 23; $i++) {
                    
                    if (isset($card[$i . 'title'], $card[$i . 'text'])) {
                        $title = $card[$i . 'title'];
                        $text = $card[$i . 'text'];
                        
                        
                        echo "<div class='section'>";
                       
                        switch ($i) {
                            case 21:
                                // URI for section 21
                                $icon_uri = $template_uri . '/assets/images/21.png';
                                break;
                            case 22:
                                // URI for section 22
                                $icon_uri = $template_uri . '/assets/images/22.png';
                                break;
                            case 23:
                                // URI for section 23
                                $icon_uri = $template_uri . '/assets/images/23.png';
                                break;
                            default:
                                
                                $icon_uri = $template_uri . '/assets/images/default_icon.png';
                        }
                        echo "<img src='$icon_uri' alt='Icon $i'>"; 
                        echo "<h3>$title</h3>";
                        echo "<p>$text</p>";
                        echo "</div>";
                    }
                }
                
                echo "</div>"; 
            }
        } else {
            echo "<p>No cards found.</p>";
        }
        ?>
        </div>
        
    </div>
</section>


<?php
// Get the third section title
$third_section_title = get_field('third_section_title');

// Get the third section text
$third_section_text = get_field('third_section_text');

// Output the third section with class "third-section"
echo '<div class="third-section">';
echo '<h2>' . $third_section_title . '</h2>';
echo '<p>' . $third_section_text . '</p>';

// Get the third section cards (assuming it's a repeater field)
$third_section_cards = get_field('third_section_cards');

// Check if the third section cards exist and if it has any items
if ($third_section_cards) {
    // Start "third-cards" div
    echo '<div class="third-cards">';
    
    // Get card one
    $one_card = $third_section_cards['one_card'];
    $one_card_tittle = $one_card['one_card_tittle'];
    $one_card_text = $one_card['one_card_text'];

    // Get card two
    $two_card = $third_section_cards['two_card'];
    $two_card_tittle = $two_card['two_card_tittle'];
    $two_card_text = $two_card['two_card_text'];

    // Get card three
    $three_card = $third_section_cards['three_card'];
    $three_card_tittle = $three_card['three_card_tittle'];
    $three_card_text = $three_card['three_card_text'];

    // Get card four
    $four_card = $third_section_cards['four_card'];
    $four_card_tittle = $four_card['four_card_tittle'];
    $four_card_text = $four_card['four_card_text'];

    // Get the base URL of the theme
    $theme_base_url = get_template_directory_uri();

    // Display the cards
    echo '<div class="thcard">';
    echo '<img src="' . $theme_base_url . '/assets/images/31.png" alt="">';
    echo '<h3>' . $one_card_tittle . '</h3>';
    echo '<p>' . $one_card_text . '</p>';
    echo '</div>';

    echo '<div class="thcard">';
    echo '<img src="' . $theme_base_url . '/assets/images/32.png" alt="">';
    echo '<h3>' . $two_card_tittle . '</h3>';
    echo '<p>' . $two_card_text . '</p>';
    echo '</div>';

    echo '<div class="thcard">';
    echo '<img src="' . $theme_base_url . '/assets/images/33.png" alt="">';
    echo '<h3>' . $three_card_tittle . '</h3>';
    echo '<p>' . $three_card_text . '</p>';
    echo '</div>';

    echo '<div class="thcard">';
    echo '<img src="' . $theme_base_url . '/assets/images/34.png" alt="">';
    echo '<h3>' . $four_card_tittle . '</h3>';
    echo '<p>' . $four_card_text . '</p>';
    echo '</div>';

    // End "third-cards" div
    echo '</div>';
}

// End "third-section" div
echo '</div>';
?>



<!-- ///////   TAMTA SECTION-->




    
  

<!-- FOURT SECTION  -->
 
<div class="home-section-4">
	<div class="container-4">

		<div class="home-section-4-title">
			<div class="second-title-container">
			<?php
				$distination_title = get_field('distination_title');
								
				?>
				<h1><?php echo esc_html($distination_title); ?></h1>
			</div>
		</div>

		<div class="section-4-contaier">
		<div class="containerbig">
			<div class="containercards">
				<div class="worldmap">

						<img class = "worldmap-div" src="<?php echo get_template_directory_uri() . "/assets/image/world_map.png" ?>" alt="">
					
					<div class="location-1">
						<img class="location-1-1"  src=" <?php echo get_template_directory_uri() . "/assets/image/location.png" ?>" alt="">
					</div>
					<div class="location-2">
						<img class="location-2-2"  src="<?php echo get_template_directory_uri() . "/assets/image/location.png" ?>" alt="">
					</div>
					<div class="location-3">
						<img class="location-3-3"  src=" <?php echo get_template_directory_uri() . "/assets/image/location.png" ?>" alt="">
					</div>
				</div>
				<div class="imgcontainer">
									<?php
									$distinations = get_posts(array("post_type" => "distinations"));
									$distination_title = get_field('distination_title');
									foreach ($distinations as $distination) :
										$distination_img = get_field('distination_img', $distination->ID);
										$distination_text_1 = get_field('distination_text_1', $distination->ID);
										$distination_text_2 = get_field('distination_text_2', $distination->ID);
									?>
					<div class="smallcontainer">
						<div class="small-img">
						<img src="<?php echo esc_url($distination_img['url']); ?>" alt="<?php echo esc_attr($distination->post_title); ?>">
						</div>
						<div class="countryname">
							<h2>
								<?php echo esc_html($distination_text_1); ?>
							</h2>
						</div>
						<div class="description">
							<h2>
								<?php echo esc_html($distination_text_2); ?>
							</h2>
						</div>
						<div class="arrowing">
							<img src="<?php echo get_template_directory_uri() . "/assets/image/vector.png" ?>" alt="">
						</div>
					</div>
          	<?php
									endforeach;
									?>
				</div>
			</div>
		
		</div>
		</div>
	</div>
	</div>

<!-- SEVENTH SECTION  -->

    <!-- GET FIELD  -->
    <?php
    $about_us_title = get_field('about_us_title');
    $hero_image = get_field('hero_image');
    $hero_description = get_field('hero_description');
    $hero_name = get_field('hero_name');
    ?>

    <section class="home-section-7">
        
        <div class="section-tite-7"><?php echo $about_us_title; ?></div>
         <div class="content-container-7">
            <div class="icon">  
            <img src="<?php echo get_template_directory_uri() . './assets/images/el30.png'; ?>" alt="">
            </div>
            <div class="content">
                <p> <?php echo  $hero_description; ?> </p>
                <h2> <?php echo  $hero_name; ?> </h2>
            </div>
         </div>
    </section>


<?php
get_footer();

?>