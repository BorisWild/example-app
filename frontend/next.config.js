/** @type {import('next').NextConfig} */
module.exports = {
  assetPrefix: process.env.NODE_ENV === "production" ? "/landing/" : undefined,

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
