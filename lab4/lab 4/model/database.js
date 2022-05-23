const { Sequelize, DataTypes } = require('sequelize')

const sequelize = new Sequelize('lab_4', 'root', '', {
    host: 'localhost',
    dialect: 'mysql',
    pool: { max: 5, min: 0, idle: 10000 }
})

sequelize.authenticate()
    .then(() => {
        console.log('database connect success')
    })
    .catch(err => {
        console.log(err)
    })

const db = {}
db.Sequelize = Sequelize
db.sequelize = sequelize

db.sequelize.sync({ force: false })
    .then(() => {
        console.log('sync database')
    })


db.users = require('./User')(sequelize, DataTypes)

module.exports = db