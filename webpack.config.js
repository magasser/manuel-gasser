const ExtractTextPlugin = require('extract-text-webpack-plugin');
var fs = require('fs');
let entries = [];

let getAllFiles = () => {
    let files = fs.readdirSync('./styles');
    files.forEach(el => {
        entries.push("./styles/"+el);
    });
};

getAllFiles();

module.exports = {
    entry: {
        'default': entries
    },
    module: {
        rules: [
            {
                test: /.scss$/,
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
