# Session Interoperability

*session-writer-interop* tries to identify and standardize features in *session* objet to achieve interoperability between PHP package. IT does handle saving of an array as the session.
This interface is designed to be immutable.
Through discussions and trials, we try to create a standard, made of common interfaces but also recommendations.

## Installation

You can install this package through Composer:

```json
composer require session-interop/session-writer-interop
```
The packages adheres to the [SemVer](http://semver.org/) specification, and there will be full backward compatibility between minor versions.

## Implementations

[`DefaultSessionWriter`](https://github.com/session-interop/utils-writer-session)

A basic implementation of the interface.
