jQuery('body').bind('wc_fragments_refreshed', function () {
    jQuery('body').trigger('jetpack-lazy-images-load');
});