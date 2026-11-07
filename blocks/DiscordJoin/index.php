<?php
/**
 * Discord invitation banner block.
 *
 * Place join-discord.png in this block's images directory.
 * The existing block-Join_Discord.php identifier resolves to this entry point.
 *
 * @author    Lonestar (https://www.evolution-xtreme.co.uk)
 * @version   1.1.0
 * @copyright 2024 evolution-xtreme.co.uk
 */
defined( 'BLOCK_FILE' ) || exit;

global $currentlang;

$join_discord_language = array();
require __DIR__ . '/language/lang-english.php';

$join_discord_defaults = $join_discord_language;

if ( is_string( $currentlang ) && 'english' !== $currentlang
    && preg_match( '/\A[A-Za-z0-9_-]+\z/', $currentlang ) ) {
    $join_discord_translation = __DIR__ . '/language/lang-' . $currentlang . '.php';

    if ( is_file( $join_discord_translation ) ) {
        require $join_discord_translation;
    }
}

$join_discord_language = array_replace( $join_discord_defaults, $join_discord_language );

$discord_banner_url = 'blocks/' . rawurlencode( basename( __DIR__ ) ) . '/images/join-discord.webp';

?>
<a class="banner-promo" href="https://discord.gg/NPSxvegceK" target="_blank" rel="noopener noreferrer">
    <img class="tp-tooltip" src="<?php echo escape_html( $discord_banner_url ); ?>" alt="<?php echo escape_html( $join_discord_language['join_discord'] ); ?>" title="<?php echo escape_html( $join_discord_language['join_discord'] ); ?>" loading="lazy">
</a>
