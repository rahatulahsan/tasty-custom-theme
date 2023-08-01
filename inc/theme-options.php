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
    'title'  => 'About',
    'fields' => array(

        array(
            'id'           => 'about-photo-1',
            'type'         => 'upload',
            'title'        => 'Upload',
            'library'      => 'image',
            'placeholder'  => 'http://',
            'button_title' => 'Add Image',
            'remove_title' => 'Remove Image',
        ),
        array(
            'id'           => 'about-photo-2',
            'type'         => 'upload',
            'title'        => 'Upload',
            'library'      => 'image',
            'placeholder'  => 'http://',
            'button_title' => 'Add Image',
            'remove_title' => 'Remove Image',
        ),
        array(
            'id'      => 'main-heading',
            'type'    => 'text',
            'title'   => 'Main Heading',
        ),
        array(
            'id'      => 'sub-heading',
            'type'    => 'text',
            'title'   => 'Sub Heading',
        ),
        array(
            'id'      => 'about-content',
            'type'    => 'textarea',
            'title'   => 'Contents',
        ),
        array(
            'id'           => 'signature',
            'type'         => 'upload',
            'title'        => 'Upload Signature',
            'library'      => 'image',
            'placeholder'  => 'http://',
            'button_title' => 'Add Image',
            'remove_title' => 'Remove Image',
        ),

    )
  ) );


   //
  // Create a section (Call To Action)
  CSF::createSection( $prefix, array(
    'title'  => 'Call to action',
    'fields' => array(

        array(
            'id'           => 'cta-bg',
            'type'         => 'upload',
            'title'        => 'Background Image',
            'library'      => 'image',
            'placeholder'  => 'http://',
            'button_title' => 'Add Image',
            'remove_title' => 'Remove Image',
        ),
        array(
            'id'      => 'cta-title',
            'type'    => 'text',
            'title'   => 'CTA Title',
        ),
        array(
            'id'      => 'cta-subtitle',
            'type'    => 'text',
            'title'   => 'CTA Subtitle',
        ),
        array(
            'id'      => 'cta-btn-name',
            'type'    => 'text',
            'title'   => 'CTA Button Name',
        ),
        array(
            'id'    => 'cta-btn-link',
            'type'  => 'link',
            'title' => 'CTA Button Link',
          ),


    )
  ) );


  
   //
  // Create a section (Reviews)
  CSF::createSection( $prefix, array(
    'title'  => 'Reviews',
    'fields' => array(

        array(
            'id'           => 'reviews-bg',
            'type'         => 'upload',
            'title'        => 'Background Image',
            'library'      => 'image',
            'placeholder'  => 'http://',
            'button_title' => 'Add Image',
            'remove_title' => 'Remove Image',
        ),

    )
  ) );

   //
  // Create a section (Gallery)
  CSF::createSection( $prefix, array(
    'title'  => 'Gallery',
    'fields' => array(

        array(
            'id'    => 'meal-gallery',
            'type'  => 'gallery',
            'title' => 'Gallery',
          ),

    )
  ) );

}