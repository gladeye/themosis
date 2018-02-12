import "~/styles/main.scss";
import { bootstrap } from "~/scripts/bootstrap";

// auto-require all images
importAll(require.context("./images", true, /\.(jpg|png)$/));

// initiate bootstrap
bootstrap();

function importAll(r) {
    r.keys().forEach(r);
}

if (module.hot) {
    module.hot.accept();
}
