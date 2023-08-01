<?php 
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'theme-options';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'theme-options',
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'id'    => 'header-tab',
    'title'  => 'Header',
  ));

   // Create a sub-tab
   CSF::createSection( $prefix, array(
    'parent' => 'header-tab',
    'title'  => 'Logo',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'logo-text',
        'type'  => 'text',
        'title' => 'Logo Name',
      ),

    )
    
  ) );

    // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'header-tab', // The slug id of the parent section
    'title'  => 'Hero',
    'fields' => array(

        array(
            'id'    => 'hero-gallery',
            'type'  => 'gallery',
            'title' => 'Upload Hero Background',
            'add_title' => 'Add Hero BG'
          ),
        array(
            'id'      => 'hero-title',
            'type'    => 'text',
            'title'   => 'Hero Title',
        ),
        array(
            'id'      => 'hero-subtext',
            'type'    => 'text',
            'title'   => 'Hero Subtitle',
        ),

    )

  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

}