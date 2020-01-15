const ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
    entry: {
        'default': [
            './styles/home.scss'
        ]
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: ['css-loader', 'sass-loader']
                })
            }
        ]
    },
    plugins: [
        new ExtractTextPlugin('[name].css')
    ],
    stats: {
        warnings: false,
        version: true,
        chunks: false,
        children: false,
        env: true,
        timings: true,
    }
};
