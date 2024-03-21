import React from "react";
import ReactDOM from "react-dom/client";
import MoviesParent from "./MoviesParent";
import MoviesChild from "./MoviesChild";
import "./index.css";
const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
    <React.StrictMode>
        <MoviesParent />
        <MoviesChild />
    </React.StrictMode>
);