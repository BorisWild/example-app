/** @type {import('next').NextConfig} */
module.exports = {
  //assetPrefix: process.env.NODE_ENV === "production" ? "/landing/" : undefined,
    basePath: '/frontend',
  images: {
    remotePatterns: [
      {
        protocol: 'https',
        hostname: 'avatars.githubusercontent.com',
        port: '',
        pathname: '**',
      },
    ],
  },
};
