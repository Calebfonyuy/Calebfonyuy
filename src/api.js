const PROD_URL = 'https://calebapi.suuynyuy.com/api/'

const DEV_URL = 'https://calebapi.suuynyuy.com/api/'

const BASE_URL = process.env.NODE_ENV === 'production' ? PROD_URL : DEV_URL

export default BASE_URL;