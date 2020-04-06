<?php


add_action( 'rest_api_init', 'ballon_search_api' );


function ballon_search_api(){

    register_rest_route( 'ballon/v1','search', array(

        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'ballonCallbackResult'

    ) );
}


function ballonCallbackResult($data){

    $mainQuery = new WP_Query(array(
        'post_type' => 'post',
        's' => sanitize_text_field($data['term'])
    ));

    $mainResult = array();

    while($mainQuery->have_posts(  )){
        $mainQuery->the_post();

        if(get_post_type() == 'post'){

            array_push($mainResult, array(
                'title' => get_the_title(  ),
                'content' => get_the_content( ),
                'id' => get_the_ID(  ),
                'image' => get_the_post_thumbnail_url(),
                'born' => get_field('player_born'),
                'country' => get_field('player_country'),
                'con_flag' => get_field('player_country_flag'),
                'club' => get_field('player_club'),
                'clu_flag' => get_field('player_club_flag'),
                'year' => get_field('player_year'),
                'height' => get_field('player_height'),
                'position' => get_field('player_position'),
                'points' => get_field('player_points'),
                'sec_name' => get_field('second_player_name'),
                'sec_image' => get_field('second_player_image'),
                'sec_points' => get_field('second_player_points'),
                'thi_name' => get_field('third_player_name'),
                'thi_image' => get_field('third_player_image'),
                'thi_points' => get_field('third_player_points')

            ));

        }


    }


    return $mainResult;

}



