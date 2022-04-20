const express = require('express')
const morgan = require('morgan')

const middlewares = [
    morgan('dev'),
    express.urlencoded({ extended: true }),
    express.json()
]

module.exports = (app) => {
    middlewares.forEach(m => {
        app.use(m)
    })
}