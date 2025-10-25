<?php
/**
*
* Lite Attachment Protection
*
*/
?>

<div class="pdav3_mp4">
    <input type="hidden" id="pda_v3_post_id" value="<?php echo $post->ID ?>"/>
    <input type="hidden" name="pda-v3-protection_toggle" value="off"/>
    <input type="checkbox" id="pda_v3_protection_toggle"
           name="pda_v3_protection_toggle" <?php checked( ( $is_protected ) ); ?> />
    <label class="pda-v3-protection-toggle" for="pda_v3_protection_toggle">
            <span aria-role="hidden" class="pdav3-on button button-primary"
                  data-pdav3-content="<?php esc_attr_e( 'Protect this file', 'prevent-direct-access' ); ?>"></span>
        <span aria-role="hidden" class="pdav3-off"
              data-pdav3-content="<?php esc_attr_e( 'Unprotect this file', 'prevent-direct-access' ); ?>"></span>

        <span class="visuallyhidden"><?php esc_html_e( 'Protect this attachment\'s files with PDA.', 'prevent-direct-access' ); ?></span>
    </label>
    <div class="pda_v3_wrap_file_access_permission">
        <div><?php _e('File Access Permission', 'prevent-direct-access') ?></div>
        <select class='pda_v3_file_access_permission' id="pda_file_access_permission_value">
            <option <?php echo $type_select === 'default' ? 'selected' : '' ?> value="default"><?php echo esc_html__( 'Use default setting', 'prevent-direct-access' ); ?>
            </option>
            <option <?php echo $type_select === 'admin-user' ? 'selected' : '' ?> value="admin-user"><?php echo esc_html__( 'Admin users', 'prevent-direct-access' ); ?>
            </option>
            <option <?php echo $type_select === 'author' ? 'selected' : '' ?> value="author"><?php echo esc_html__( 'The file\'s author', 'prevent-direct-access' ); ?>
            </option>
            <option <?php echo $type_select === 'memberships' ? 'selected' : '' ?> value="memberships" disabled><?php echo esc_html__( 'Choose custom memberships', 'prevent-direct-access' ); ?>                
            </option>
            <option <?php echo $type_select === 'logger-in-user' ? 'selected' : '';
            echo $ip_block_disabled; ?> value="logger-in-user"><?php echo esc_html__( 'Logged-in users', 'prevent-direct-access' ); ?>
            </option>
            <option <?php echo $type_select === 'blank' ? 'selected' : '';
            echo $ip_block_disabled; ?> value="blank"><?php echo esc_html__( 'No one', 'prevent-direct-access' ); ?>
            </option>
            <option <?php echo $type_select === 'anyone' ? 'selected' : '';
            echo $ip_block_disabled; ?> value="anyone"><?php echo esc_html__( 'Anyone', 'prevent-direct-access' ); ?>
            </option>
            <option <?php echo $type_select === 'custom-roles' ? 'selected' : '' ?> value="custom-roles" disabled>
                <?php echo esc_html__( 'Choose custom roles', 'prevent-direct-access' ); ?>
            </option>
        </select>
        <span id="pda_loader"></span>
    </div>
</div>
