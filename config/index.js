const env = process.env.NODE_ENV;

function getConfigForEnvironment(env) {
  switch (env) {
    case "production":
      return require("./config.production");
    default:
      return require("./config.development");
  }
}

module.exports = getConfigForEnvironment(env);