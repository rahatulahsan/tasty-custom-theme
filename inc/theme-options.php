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
  // Create a section (License)
  CSF::createSection( $prefix, array(
    'title'  => 'License',
    'fields' => array(

      array(
        'id'    => 'username',
        'type'  => 'text',
        'title' => 'Username',
      ),
      array(
        'id'    => 'purchase-code',
        'type'  => 'text',
        'title' => 'Purchase Code',
      ),

    )
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'id'    => 'headings-subheadings',
    'title'  => 'Heading & Subheading',
  ));

  // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'headings-subheadings',
    'title'  => 'About',
    'fields' => array(

      array(
        'id'    => 'about-heading',
        'type'  => 'text',
        'title' => 'About Section Heading',
      ),
      array(
        'id'    => 'about-subheading',
        'type'  => 'text',
        'title' => 'About Section Sub Heading',
      ),

    )

  ) );

  // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'headings-subheadings',
    'title'  => 'Tasty Menu',
    'fields' => array(

      array(
        'id'    => 'tasty-menu-heading',
        'type'  => 'text',
        'title' => 'Menu Section Heading',
      ),
      array(
        'id'    => 'tasty-subheading',
        'type'  => 'text',
        'title' => 'Menu Section Sub Heading',
      ),

    )

  ) );

   // Create a sub-tab
   CSF::createSection( $prefix, array(
    'parent' => 'headings-subheadings',
    'title'  => 'Special Menu',
    'fields' => array(

      array(
        'id'    => 'special-menu-heading',
        'type'  => 'text',
        'title' => 'Special Section Heading',
      ),
      array(
        'id'    => 'special-subheading',
        'type'  => 'text',
        'title' => 'Special Section Sub Heading',
      ),

    )

  ) );

  // Create a sub-tab
  CSF::createSection( $prefix, array(
    'parent' => 'headings-subheadings',
    'title'  => 'Reservation',
    'fields' => array(

      array(
        'id'    => 'reservation-heading',
        'type'  => 'text',
        'title' => 'Reservation Section Heading',
      ),
      array(
        'id'    => 'reservation-subheading',
        'type'  => 'text',
        'title' => 'Reservation Section Sub Heading',
      ),
      array(
        'id'    => 'reservation-section-header-content',
        'type'  => 'textarea',
        'title' => 'Reservation Section Heading Content',
      ),

    )

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

   //
  // Create a section (Gallery)
  CSF::createSection( $prefix, array(
    'title'  => 'Contact',
    'fields' => array(

        array(
            'id'    => 'map-location',
            'type'  => 'text',
            'title' => 'Map Location',
          ),

        array(
          'id'     => 'social-repeater',
          'type'   => 'repeater',
          'title'  => 'Social Connections',
          'fields' => array(
        
            array(
              'id'    => 'social-icon',
              'type'  => 'icon',
              'title' => 'Icon'
            ),
            array(
              'id'    => 'social-link',
              'type'  => 'link',
              'title' => 'Social Link',
            ),
        
          ),
        ),

        array(
          'id'      => 'opening-hour',
          'type'    => 'text',
          'title'   => 'Opening Hours',
        ),
        array(
          'id'      => 'additional-content',
          'type'    => 'textarea',
          'title'   => 'Additional Info',
        ),
        array(
          'id'      => 'address',
          'type'    => 'text',
          'title'   => 'Address',
        ),
        array(
          'id'      => 'phone',
          'type'    => 'text',
          'title'   => 'Phone',
        ),
        array(
          'id'      => 'fax',
          'type'    => 'text',
          'title'   => 'Fax',
        ),
        array(
          'id'      => 'mail',
          'type'    => 'text',
          'title'   => 'Email',
        ),
    )
  ) );

   //
  // Create a section (Footer)
  CSF::createSection( $prefix, array(
    'title'  => 'Footer',
    'fields' => array(

      array(
        'id'    => 'copyright',
        'type'  => 'wp_editor',
        'title' => 'Copyright',
      ),

    )
  ) );

}