import axios from 'axios'

const $http = axios.create({
  baseURL: 'http://localhost:3000/',
  //   baseURL: 'http://laravel.test/',
  withCredentials: false, // This is the default
  headers: {
    Accept: 'application/json',
    'Content-Type': 'application/json'
  }
})

export default {
  getEvents() {
    return $http.get('/events')
  },
  getEvent(id) {
    return $http.get('/events/' + id)
  }
}
