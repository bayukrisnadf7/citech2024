/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#12B28C",
                secondary: "#307B74",
                tertiary: "#D1F16A",
            },
            boxShadow: {
                "0" : "rgba(149, 157, 165, 0.2) 0px 8px 24px",
                "1" : "rgba(100, 100, 111, 0.2) 0px 7px 29px 0px",
                "6" : "rgba(99, 99, 99, 0.2) 0px 2px 8px 0px",
                "11" : "rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px",
                "19" : "rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px",
            },
            fontFamily: {
                poppins: "Poppins, sans-serif",
            },
            screens: {
                mobile: { max: "600px" },
                "large-mobile": { min: "600px", max: "768px" },
                tablet: { min: "768px", max: "1024px" },
                "small-laptop": { min: "1024px", max: "1280px" },
                "medium-laptop": { min: "1280px", max: "1536px" },
                "large-laptop": { min: "1536px", max: "1920px" },
                monitor: { min: "1920px" },
            },
        },
    },
    plugins: [
        // require('@tailwindcss/line-clamp'),
    ],
};
