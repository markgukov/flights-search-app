<?php

namespace Tests\Feature;

use Tests\TestCase;

class FrontendTest extends TestCase {
    /**
     * The front-end SPA is loaded
     *
     * @return void
     */
    public function testSpaLoaded() {
        $response = $this->get( '/' );

        $response->assertStatus( 200 );

        $response->assertSeeInOrder( [ '/css/bundle.css', '/js/bundle.js' ] );
    }

    /**
     * Test 404 page
     */
    public function testNotFound() {
        $this->get( '/asdf' )->assertStatus( 404 );
    }

}
