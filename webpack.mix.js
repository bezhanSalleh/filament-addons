const mix = require("laravel-mix");

mix.disableSuccessNotifications();

mix.setPublicPath("./resources/dist")
    .postCss(
        "./resources/css/filament-addons.css",
        "filament-addons.css",
        [
            require("tailwindcss/nesting")(),
            require("tailwindcss")("./tailwind.config.js"),
        ]
    )
    .options({
        processCssUrls: false,
    });

