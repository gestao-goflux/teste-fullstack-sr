const PROXY_CONFIG = [
    {
        context: ['/api'],
        target: 'http://[::1]:8000/',
        secure: false,
        logLevel: 'debug'
    }
]

module.exports = PROXY_CONFIG;