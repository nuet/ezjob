<?php if (!defined('THINK_PATH')) exit();?><?php if(0 == $follow_state['following']): ?><a event-node="doFollow" event-args="uid=<?php echo ($fid); ?>&uname=<?php echo ($uname); ?>&following=<?php echo ($follow_state['following']); ?>&follower=<?php echo ($follow_state['follower']); ?>&refer=<?php echo ($refer); ?>&isrefresh=<?php echo ($isrefresh); ?>" href="<?php echo U('public/Follow/doFollow', array('fid'=>$fid));?>" class="btn-cancel"></a>
<?php else: ?>
    <a event-node="unFollow" event-args="uid=<?php echo ($fid); ?>&uname=<?php echo ($uname); ?>&following=<?php echo ($follow_state['following']); ?>&follower=<?php echo ($follow_state['follower']); ?>&refer=<?php echo ($refer); ?>&isrefresh=<?php echo ($isrefresh); ?>" href="<?php echo U('public/Follow/unFollow', array('fid'=>$fid));?>" class="btn-cancel"></a><?php endif; ?>