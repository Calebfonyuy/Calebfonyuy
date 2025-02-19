const PROD_URL = 'https://calebapi.suuynyuy.com/api/'

const DEV_URL = 'https://zany-garbanzo-pp7wpxj9vg7397w6-3000.app.github.dev/api/'

const BASE_URL = process.env.NODE_ENV === 'production' ? PROD_URL : DEV_URL

export default BASE_URL;