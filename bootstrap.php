<?php
/*
Plugin Name: Elementor Color and Typography Scheme Compatibility
Plugin URI:  https://github.com/adrianbrs/wp-plugin-elementor-fix-schema
Description: Workaround plugin for missing Elementor's Scheme_Color and Scheme_Typography classes
Version:     1.0
Author:      Adrian Cerbaro
Author URI:  https://cerbaro.dev
*/

namespace Elementor;

\add_action(
  'plugins_loaded',
  function() {
    if ( ! class_exists( 'Elementor\Scheme_Color' ) ) {
      class Scheme_Color extends Core\Schemes\Color {}
    }
  }
);
\add_action(
  'plugins_loaded',
  function() {
    if ( ! class_exists( 'Elementor\Scheme_Typography' ) ) {
      class Scheme_Typography extends Core\Schemes\Typography {}
    }
  }
);