# Defaults

## Install

```bash
git clone git@github.com:asirgado/defaults.git defaults
cd /defaults
bower install & npm install
php composer.phar install
```

## Development

#### Serving

```bash
grunt serve
# running on localhost:9000 and API on port 9050
```

#### I forgot how to..

Copy file to server?

```bash
scp [local path..] [username]@[ip address]:~/[remote path..]
```

Installing packages?

```bash
npm install [package-name] --save-dev
```

Set up SSH keys?

[digitalocean.com/community/tutorials/how-to-set-up-ssh-keys--2](https://www.digitalocean.com/community/tutorials/how-to-set-up-ssh-keys--2)


## Production

```bash
grunt build
```
