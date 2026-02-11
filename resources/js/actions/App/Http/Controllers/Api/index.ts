import AuthApiController from './AuthApiController'
import CarApiController from './CarApiController'
import BookingApiController from './BookingApiController'
import RateApiController from './RateApiController'
const Api = {
    AuthApiController: Object.assign(AuthApiController, AuthApiController),
CarApiController: Object.assign(CarApiController, CarApiController),
BookingApiController: Object.assign(BookingApiController, BookingApiController),
RateApiController: Object.assign(RateApiController, RateApiController),
}

export default Api