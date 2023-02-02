import '../styles/main.scss';

import $ from 'jquery';
window.jQuery = $;
window.jquery = $;
window.$ = $;

let owl_carousel = require('owl.carousel');
window.fn = owl_carousel;

import * as Popper from '@popperjs/core';
import 'bootstrap';
import 'snapsvg';

import Router from './util/Router';
import common from './routes/common';

import postTypeArchiveService from './routes/postTypeArchiveService';
import pageTemplateTemplateContact from './routes/pageTemplateTemplateContact';

/** Populate Router instance with DOM routes */
const routes = new Router({
    // All pages
    common,
    // Archive Service
    postTypeArchiveService,
    // Template Contact
    pageTemplateTemplateContact,
});

// Load Events
$(document).ready(function () {
    routes.loadEvents();
});
