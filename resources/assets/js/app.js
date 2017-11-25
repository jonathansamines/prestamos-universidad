
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

var $ = require('jquery');
var dt = require('datatables.net');
var bt = require('datatables.net-bs4');

$(document).ready(() => {
    $('.table').dataTable();
});