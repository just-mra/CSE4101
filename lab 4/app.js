const express = require('express')
const dotenv = require('dotenv')
const cors = require('cors')
const cookieParser = require('cookie-parser')
const setMiddleware = require('./middleware/middleware')
const setRoute = require('./route/route')


const app = express()
dotenv.config()

app.set('view engine', 'ejs')
app.set('views')

app.use(cors({ credentials: true, origin: '' }))
app.use(cookieParser())

setMiddleware(app)
setRoute(app)


require('./model/database')


app.listen(2000, () => {
    console.log('server create success')
})