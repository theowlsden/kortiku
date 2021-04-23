module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
        fontFamily: {
            primary: ["Poppins", "sans-serif"],
        },
        backgroundColor: (theme) => ({
            primary: "#F0EFFE ",
            vibrant: "#A49EFB",
        }),
        borderColor: (theme) => ({
            ...theme("colors"),
            DEFAULT: theme("#A49EFB", "currentColor"),
            primary: "#A49EFB",
        }),
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
