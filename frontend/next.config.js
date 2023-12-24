/** @type {import('next').NextConfig} */
module.exports = {
  assetPrefix: process.env.NODE_ENV === "production" ? "/frontend/" : undefined,

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
