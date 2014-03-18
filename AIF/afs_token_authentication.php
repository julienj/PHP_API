<?php
require_once 'AIF/afs_authentication.php';

/** @brief AFS token authentication.
 *
 * Instances of this class should be used t interact with Antidot Back Office
 * APIs.
 */
class AfsTokenAuthentication implements AfsAuthentication
{
    private $token = null;


    /** @brief Constructs new AFS token authentication instance.
     * @param $token [in] Authentication token.
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /** @brief Formats authentication parameters.
     * @return string representing authentication.
     */
    public function format()
    {
        return $this->token;
    }
}
